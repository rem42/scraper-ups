<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class Shipper
{
    public ?string $name = null;
    public ?string $attentionName = null;
    public ?string $companyDisplayableName = null;
    public ?string $taxIdentificationNumber = null;
    public ?Phone $phone = null;
    public ?string $shipperNumber = null;
    public ?string $faxNumber = null;
    public Address $address;

    public function __construct()
    {
        $this->phone = new Phone();
        $this->address = new Address();
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setAttentionName(?string $attentionName): self
    {
        $this->attentionName = $attentionName;
        return $this;
    }

    public function setCompanyDisplayableName(?string $companyDisplayableName): self
    {
        $this->companyDisplayableName = $companyDisplayableName;
        return $this;
    }

    public function setTaxIdentificationNumber(?string $taxIdentificationNumber): self
    {
        $this->taxIdentificationNumber = $taxIdentificationNumber;
        return $this;
    }

    public function setShipperNumber(?string $shipperNumber): self
    {
        $this->shipperNumber = $shipperNumber;
        return $this;
    }

    public function setFaxNumber(?string $faxNumber): self
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    public function getPhone(): ?Phone
    {
        return $this->phone;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }
}
