<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Response;

class ShipmentResult
{
    public ?ShipmentCharge $shipmentCharges = null;
    public ?BillingWeight $billingWeight = null;
    public ?string $shipmentIdentificationNumber = null;
    /** @var array<int, PackageResult> */
    public array $packageResults = [];

    public function addPackageResult(PackageResult $packageResult): self
    {
        $this->packageResults[] = $packageResult;
        return $this;
    }
}
