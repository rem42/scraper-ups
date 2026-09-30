<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class PackageAddress
{
    /** ORIGIN or DESTINATION */
    public ?string $type = null;
    public ?string $name = null;
    public ?string $attentionName = null;
    public ?Address $address = null;
}
