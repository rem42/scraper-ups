<?php

namespace Scraper\ScraperUPS\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::GET, scheme: Scheme::HTTPS, host: '{environnement}.ups.com')]
abstract class UpsRequest extends ScraperRequest implements RequestHeaders
{
    public const DEV = 'wwwcie';
    public const PROD = 'onlinetools';
    public function __construct(
        private readonly string $environnement = self::DEV,
        private readonly string $merchantId,
    ) {
    }

    public function getEnvironnement(): string
    {
        return $this->environnement;
    }

    public function getHeaders(): array
    {
        return [
            'x-merchant-id' => $this->merchantId,
        ];
    }
}
