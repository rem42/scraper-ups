<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class TrackResponse
{
    /** @var array<int, Shipment> */
    public array $shipment = [];
}
