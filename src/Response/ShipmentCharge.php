<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Response;

class ShipmentCharge
{
    public ?BaseServiceCharge $baseServiceCharge = null;
    public ?TransportationCharge $transportationCharges = null;
    /** @var array<int, ItemizedCharge> */
    public array $itemizedCharges = [];
    public ?ServiceOptionsCharge $serviceOptionsCharges = null;
    public ?TotalCharge $totalCharges = null;

    public function addItemizedCharge(ItemizedCharge $itemizedCharge): self
    {
        $this->itemizedCharges[] = $itemizedCharge;
        return $this;
    }
}
