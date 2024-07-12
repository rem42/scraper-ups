<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class ShipTo
{
    public ?string $name = null;
    public ?string $attentionName = null;
    public ?Phone $phone = null;
    public ?Address $address = null;
    public ?string $eMailAddress = null;
    public ?string $residential = null;
    public ?string $locationID = null;

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

    public function setEMailAddress(?string $eMailAddress): self
    {
        $this->eMailAddress = $eMailAddress;
        return $this;
    }

    public function setResidential(?string $residential): self
    {
        $this->residential = $residential;
        return $this;
    }

    public function setLocationID(?string $locationID): self
    {
        $this->locationID = $locationID;
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
