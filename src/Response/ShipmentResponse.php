<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Response;

class ShipmentResponse
{
    public ?Response $response = null;
    public ?ShipmentResult $shipmentResults = null;
    /** @hack This is a hack to get the response of the shipment */
    public ?self $shipmentResponse = null;
}
