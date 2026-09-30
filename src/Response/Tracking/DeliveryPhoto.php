<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class DeliveryPhoto
{
    /** Base64 encoded image */
    public ?string $photo = null;
    public ?bool $isNonPostalCodeCountry = null;
    public ?string $photoCaptureInd = null;
    public ?string $photoDispositionCode = null;
}
