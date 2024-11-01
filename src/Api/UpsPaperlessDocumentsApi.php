<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Api;

use Scraper\ScraperUPS\Response\UploadRequest\PaperlessDocumentsResponse;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

class UpsPaperlessDocumentsApi extends UpsApi
{
    public function execute(): PaperlessDocumentsResponse
    {
        return $this->serializer->deserialize($this->response->getContent(false), PaperlessDocumentsResponse::class, 'json', [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]);
    }
}
