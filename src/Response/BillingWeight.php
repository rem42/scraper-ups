<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Response;

class BillingWeight
{
    public ?UnitOfMeasurement $unitOfMeasurement = null;
    public ?string $weight = null;
}
