<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Response;

class PackageResult
{
    public ?string $trackingNumber = null;
    public ?ServiceOptionsCharge $serviceOptionsCharges = null;
    public ?ShippingLabel $shippingLabel = null;
}
