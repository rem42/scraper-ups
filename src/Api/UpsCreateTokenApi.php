<?php

namespace Scraper\ScraperUPS\Api;

use Scraper\ScraperUPS\Model\Token;

class UpsCreateTokenApi extends UpsApi
{
    public function execute(): Token
    {
        return $this->serializer->deserialize($this->response->getContent(), Token::class, 'json');
    }
}
