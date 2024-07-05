<?php

namespace Scraper\ScraperUPS\Model;

class Address
{
    /** @var array<int, string> */
    public array $addressLine = [];
    public ?string $city = null;
    public ?string $stateProvinceCode = null;
    public ?string $postalCode = null;
    public ?string $countryCode = null;

    public function addAddressLine(string $addressLine): self
    {
        $this->addressLine[] = $addressLine;
        return $this;
    }
}
