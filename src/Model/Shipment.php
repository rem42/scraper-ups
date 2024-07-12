<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class Shipment
{
    public ?string $description = null;
    public Shipper $shipper;
    public ShipTo $shipTo;
    public ShipFrom $shipFrom;
    public PaymentInformation $paymentInformation;
    public Service $service;
    /** @var array<int, Package> */
    public array $package = [];

    public function __construct()
    {
        $this->shipper = new Shipper();
        $this->shipTo = new ShipTo();
        $this->shipFrom = new ShipFrom();
        $this->paymentInformation = new PaymentInformation();
        $this->service = new Service();
    }

    public function addPackage(Package $package): self
    {
        $this->package[] = $package;
        return $this;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getShipper(): Shipper
    {
        return $this->shipper;
    }

    public function getShipTo(): ShipTo
    {
        return $this->shipTo;
    }

    public function getShipFrom(): ShipFrom
    {
        return $this->shipFrom;
    }

    public function getPaymentInformation(): PaymentInformation
    {
        return $this->paymentInformation;
    }

    public function getService(): Service
    {
        return $this->service;
    }
}
