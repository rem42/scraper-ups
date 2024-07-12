<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Api;

use Scraper\ScraperUPS\Response\ShipmentResponse;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

class UpsShipmentApi extends UpsApi
{
    public function execute(): ShipmentResponse
    {
        return $this->serializer->deserialize($this->response->getContent(false), ShipmentResponse::class, 'json', [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]);
    }
}
