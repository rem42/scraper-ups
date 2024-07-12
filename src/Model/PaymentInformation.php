<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class PaymentInformation
{
    /** @var array<int, ShipmentCharge> */
    public array $shipmentCharge = [];

    public function addShipmentCharge(ShipmentCharge $shipmentCharge): self
    {
        $this->shipmentCharge[] = $shipmentCharge;
        return $this;
    }
}
