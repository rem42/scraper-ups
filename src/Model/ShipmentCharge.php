<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class ShipmentCharge
{
    public ?string $type = null;
    public BillShipper $billShipper;

    public function __construct()
    {
        $this->billShipper = new BillShipper();
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getBillShipper(): BillShipper
    {
        return $this->billShipper;
    }
}
