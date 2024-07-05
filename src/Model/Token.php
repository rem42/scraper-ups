<?php

namespace Scraper\ScraperUPS\Model;

class Token
{
    public ?string $tokenType = null;
    public ?string $issuedAt = null;
    public ?string $clientId = null;
    public ?string $accessToken = null;
    public ?string $expiresIn = null;
    public ?string $status = null;
}
