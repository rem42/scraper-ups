<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

use Scraper\ScraperUPS\Response\Response;

class TrackingResponse
{
    public ?TrackResponse $trackResponse = null;

    /** Filled when UPS returns an error payload: {"response": {"errors": [...]}} */
    public ?Response $response = null;
}
