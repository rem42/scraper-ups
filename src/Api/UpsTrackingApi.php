<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Api;

use Scraper\ScraperUPS\Response\Tracking\TrackingResponse;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

class UpsTrackingApi extends UpsApi
{
    public function execute(): TrackingResponse
    {
        return $this->serializer->deserialize($this->response->getContent(false), TrackingResponse::class, 'json', [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]);
    }
}
