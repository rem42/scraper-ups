<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class ShipmentCharge
{
    public ?string $type = null;
    public ?BillShipper $billShipper = null;
    public ?BillReceiver $billReceiver = null;

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setBillShipper(?BillShipper $billShipper): self
    {
        $this->billShipper = $billShipper;
        return $this;
    }

    public function setBillReceiver(?BillReceiver $billReceiver): self
    {
        $this->billReceiver = $billReceiver;
        return $this;
    }
}
