<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Tests\Request;

use PHPUnit\Framework\TestCase;
use Scraper\ScraperUPS\Enum\TrackingStatusTypeEnum;
use Scraper\ScraperUPS\Request\UpsRequest;
use Scraper\ScraperUPS\Request\UpsTrackingRequest;
use Scraper\ScraperUPS\Response\Tracking\TrackingResponse;

/**
 * @internal
 */
class UpsTrackingRequestTest extends TestCase
{
    use RequestTrait;

    public function testTrackingRequest(): void
    {
        $client = $this->getClient('tracking.json');

        $request = new UpsTrackingRequest(UpsRequest::DEV, 'merchantId', '1Z023E2X0214323462', 'transId', 'testing');
        $request
            ->setToken('token')
            ->setLocale('fr_FR')
            ->setReturnMilestones(true)
        ;
        $result = $client->send($request);

        $this->assertNotNull($this->lastRequest);
        $this->assertSame('GET', $this->lastRequest['method']);
        $this->assertSame('https://wwwcie.ups.com/api/track/v1/details/1Z023E2X0214323462', $this->lastRequest['url']);
        $this->assertSame('token', $this->lastRequest['options']['auth_bearer']);
        $this->assertSame([
            'x-merchant-id' => 'merchantId',
            'transId' => 'transId',
            'transactionSrc' => 'testing',
        ], $this->lastRequest['options']['headers']);
        $this->assertSame([
            'locale' => 'fr_FR',
            'returnSignature' => 'false',
            'returnMilestones' => 'true',
            'returnPOD' => 'false',
        ], $this->lastRequest['options']['query']);

        $this->assertInstanceOf(TrackingResponse::class, $result);
        $this->assertNull($result->response);
        $this->assertNotNull($result->trackResponse);
        $this->assertCount(1, $result->trackResponse->shipment);

        $shipment = $result->trackResponse->shipment[0];
        $this->assertSame('1Z023E2X0214323462', $shipment->inquiryNumber);
        $this->assertCount(1, $shipment->package);

        $package = $shipment->package[0];
        $this->assertSame('1Z023E2X0214323462', $package->trackingNumber);
        $this->assertTrue($package->isDelivered());
        $this->assertSame(TrackingStatusTypeEnum::DELIVERED, $package->currentStatus?->getTypeEnum());
        $this->assertSame('DELIVERED', $package->currentStatus?->description);
        $this->assertSame('2021-10-15', $package->deliveryDate[0]->getDateTime()?->format('Y-m-d'));
        $this->assertSame('FRONT DOOR', $package->deliveryInformation?->location);
        $this->assertSame('UPS Ground', $package->service?->description);
        $this->assertSame('LBS', $package->weight?->unitOfMeasurement);
        $this->assertCount(2, $package->packageAddress);
        $this->assertSame('DESTINATION', $package->packageAddress[1]->type);
        $this->assertSame('ROSWELL', $package->packageAddress[1]->address?->city);
        $this->assertCount(2, $package->milestones);
        $this->assertTrue($package->milestones[1]->current);

        $this->assertCount(2, $package->activity);
        $lastActivity = $package->getLastActivity();
        $this->assertNotNull($lastActivity);
        $this->assertSame('2021-10-15 14:32:11', $lastActivity->getDateTime()?->format('Y-m-d H:i:s'));
        $this->assertSame('ROSWELL', $lastActivity->location?->address?->city);
        $this->assertSame(TrackingStatusTypeEnum::IN_TRANSIT, $package->activity[1]->status?->getTypeEnum());
    }

    public function testTrackingErrorRequest(): void
    {
        $client = $this->getClient('tracking_error.json', 404);

        $request = new UpsTrackingRequest(UpsRequest::DEV, 'merchantId', 'unknown', 'transId');
        $request->setToken('token');
        $result = $client->send($request);

        $this->assertInstanceOf(TrackingResponse::class, $result);
        $this->assertNull($result->trackResponse);
        $this->assertNotNull($result->response);
        $this->assertCount(1, $result->response->errors);
        $this->assertSame('TW0001', $result->response->errors[0]->code);
        $this->assertSame('Tracking Information Not Found', $result->response->errors[0]->message);
    }
}
