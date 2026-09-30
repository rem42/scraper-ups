<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class Shipment
{
    public ?string $inquiryNumber = null;

    /** @var array<int, Package> */
    public array $package = [];

    /** @var array<int, string> */
    public array $userRelation = [];

    /** @var array<int, Warning> */
    public array $warnings = [];
}
