<?php

namespace Scraper\ScraperUPS\Model;

class ShipmentRequest
{
    public ?Request $request = null;
    public ?Shipment $shipment = null;
    public ?LabelSpecification $labelSpecification = null;
}
