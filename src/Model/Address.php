<?php declare(strict_types=1);

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

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function setStateProvinceCode(?string $stateProvinceCode): self
    {
        $this->stateProvinceCode = $stateProvinceCode;
        return $this;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
