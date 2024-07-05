<?php

namespace Scraper\ScraperUPS\Model;

class Dimension
{
    public ?UnitOfMeasurement $unitOfMeasurement = null;
    public ?string $length = null;
    public ?string $width = null;
    public ?string $height = null;
}
