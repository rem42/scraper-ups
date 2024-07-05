<?php

namespace Scraper\ScraperUPS\Model;

class Package
{
    public ?string $description = null;
    public ?Packaging $packaging = null;
    public ?Dimension $dimensions = null;
    public ?PackageWeight $packageWeight = null;
}
