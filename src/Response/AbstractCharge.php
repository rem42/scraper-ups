<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Response;

abstract class AbstractCharge
{
    public ?string $currencyCode = null;
    public ?string $monetaryValue = null;
}
