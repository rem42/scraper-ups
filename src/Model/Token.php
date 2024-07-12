<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class Token
{
    public ?string $tokenType = null;
    public ?int $issuedAt = null;
    public ?string $clientId = null;
    public ?string $accessToken = null;
    public ?int $expiresIn = null;
    public ?string $status = null;
}
