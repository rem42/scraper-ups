<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class ShipmentRequest
{
    public Request $request;
    public Shipment $shipment;
    public LabelSpecification $labelSpecification;

    public function __construct()
    {
        $this->request = new Request();
        $this->shipment = new Shipment();
        $this->labelSpecification = new LabelSpecification();
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function getShipment(): Shipment
    {
        return $this->shipment;
    }

    public function getLabelSpecification(): LabelSpecification
    {
        return $this->labelSpecification;
    }
}
