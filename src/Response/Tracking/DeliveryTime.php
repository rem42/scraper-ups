<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class DeliveryTime
{
    /** Format: His */
    public ?string $startTime = null;

    /** Format: His */
    public ?string $endTime = null;

    /** EOD: end of day, CMT: commit time, EDW: estimated delivery window, CDW: confirmed delivery window, IDW: imminent delivery window, DEL: delivered */
    public ?string $type = null;
}
