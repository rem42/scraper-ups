<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class Pod
{
    /** Base64 encoded HTML proof of delivery */
    public ?string $content = null;
}
