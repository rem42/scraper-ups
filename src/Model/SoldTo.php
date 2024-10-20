<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class SoldTo
{
    public ?string $name = null;
    public ?string $attentionName = null;
    public Phone $phone;
    public Address $address;
    public ?string $eMailAddress = null;

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

    public function getPhone(): Phone
    {
        return $this->phone;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}
