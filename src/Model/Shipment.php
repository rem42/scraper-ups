<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class Shipment
{
    public ?string $description = null;
    public Shipper $shipper;
    public ShipTo $shipTo;
    public ?AlternateDeliveryAddress $alternateDeliveryAddress = null;
    public ShipFrom $shipFrom;
    public PaymentInformation $paymentInformation;
    public Service $service;
    public ?string $numOfPiecesInShipment = null;
    public ?ShipmentIndicationType $shipmentIndicationType = null;
    public ?ShipmentServiceOptions $shipmentServiceOptions = null;
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

    public function setNumOfPiecesInShipment(?string $numOfPiecesInShipment): self
    {
        $this->numOfPiecesInShipment = $numOfPiecesInShipment;
        return $this;
    }

    public function setShipmentIndicationType(?ShipmentIndicationType $shipmentIndicationType): self
    {
        $this->shipmentIndicationType = $shipmentIndicationType;
        return $this;
    }

    public function setAlternateDeliveryAddress(AlternateDeliveryAddress $alternateDeliveryAddress): self
    {
        $this->alternateDeliveryAddress = $alternateDeliveryAddress;
        return $this;
    }

    public function setShipmentServiceOptions(ShipmentServiceOptions $shipmentServiceOptions): self
    {
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }
}
