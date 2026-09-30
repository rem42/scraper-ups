<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class Dimension
{
    public ?string $height = null;
    public ?string $length = null;
    public ?string $width = null;
    public ?string $unitOfDimension = null;
}
