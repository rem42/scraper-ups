<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class DeliveryConfirmation
{
    public string $DCISType;
    public ?string $DCISNumber = null;

    public function setDCISType(string $DCISType): self
    {
        $this->DCISType = $DCISType;
        return $this;
    }

    public function setDCISNumber(string $DCISNumber): self
    {
        $this->DCISNumber = $DCISNumber;
        return $this;
    }
}
