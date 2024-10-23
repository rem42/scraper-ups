<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestAuthBearer;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestException;
use Scraper\ScraperUPS\Model\ShipmentRequest;
use Scraper\ScraperUPS\Serializer\NameConverter\CamelCaseToPascalCaseNameConverter;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

#[Scraper(method: Method::POST, path: '/api/shipments/{version}/ship')]
class UpsShipmentRequest extends UpsRequest implements RequestAuthBearer, RequestBody, RequestException
{
    private string $token;
    private ShipmentRequest $shipmentRequest;

    public function getBearer(): string
    {
        return $this->token;
    }

    public function isThrow(): bool
    {
        return false;
    }

    public function getBody(): string
    {
        $nameConverter = new CamelCaseToPascalCaseNameConverter();
        $normalizer = new ObjectNormalizer(null, $nameConverter);

        return (new Serializer([$normalizer], [new JsonEncoder()]))->serialize([
            'ShipmentRequest' => $this->shipmentRequest,
        ], JsonEncoder::FORMAT, [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]);
    }

    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function getVersion(): string
    {
        return 'v2403';
    }

    public function setShipmentRequest(ShipmentRequest $shipmentRequest): self
    {
        $this->shipmentRequest = $shipmentRequest;
        return $this;
    }
}
