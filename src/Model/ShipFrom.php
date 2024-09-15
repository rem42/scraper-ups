<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class ShipFrom
{
    public ?string $name = null;
    public ?string $attentionName = null;
    public Phone $phone;
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

    public function setFaxNumber(?string $faxNumber): self
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    public function getPhone(): Phone
    {
        return $this->phone;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}
