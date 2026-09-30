<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class Address
{
    public ?string $addressLine1 = null;
    public ?string $addressLine2 = null;
    public ?string $addressLine3 = null;
    public ?string $city = null;
    public ?string $stateProvince = null;
    public ?string $postalCode = null;
    public ?string $countryCode = null;
    public ?string $country = null;
}
