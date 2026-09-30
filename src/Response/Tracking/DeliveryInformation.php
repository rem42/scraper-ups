<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class DeliveryInformation
{
    public ?string $location = null;
    public ?string $receivedBy = null;
    public ?Signature $signature = null;
    public ?Pod $pod = null;
    public ?DeliveryPhoto $deliveryPhoto = null;
}
