<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class Location
{
    public ?Address $address = null;
    public ?string $slic = null;
}
