<?php

namespace Scraper\ScraperUPS\Model;

class Shipment
{
    public ?string $description = null;
    public ?Shipper $shipper = null;
    public ?ShipTo $shipTo = null;
    public ?ShipFrom $shipFrom = null;
    public ?PaymentInformation $paymentInformation = null;
    public ?Service $service = null;
    public ?Package $package = null;
}
