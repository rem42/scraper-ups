<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Api;

use Scraper\ScraperUPS\Response\TokenRequest\Token;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

class UpsCreateTokenApi extends UpsApi
{
    public function execute(): Token
    {
        return $this->serializer->deserialize($this->response->getContent(false), Token::class, 'json', [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]);
    }
}
