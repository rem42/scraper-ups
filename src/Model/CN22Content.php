<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class CN22Content
{
    public ?string $CN22ContentQuantity = null;
    public ?string $CN22ContentDescription = null;
    public ?CN22ContentWeight $CN22ContentWeight = null;
    public ?string $CN22ContentTotalValue = null;
    public ?string $CN22ContentCurrencyCode = null;
    public ?string $CN22ContentCountryOfOrigin = null;
    public ?string $CN22ContentTariffNumber = null;

    public function setCN22ContentQuantity(?string $CN22ContentQuantity): self
    {
        $this->CN22ContentQuantity = $CN22ContentQuantity;
        return $this;
    }

    public function setCN22ContentDescription(?string $CN22ContentDescription): self
    {
        $this->CN22ContentDescription = $CN22ContentDescription;
        return $this;
    }

    public function setCN22ContentWeight(?CN22ContentWeight $CN22ContentWeight): self
    {
        $this->CN22ContentWeight = $CN22ContentWeight;
        return $this;
    }

    public function setCN22ContentTotalValue(?string $CN22ContentTotalValue): self
    {
        $this->CN22ContentTotalValue = $CN22ContentTotalValue;
        return $this;
    }

    public function setCN22ContentCurrencyCode(?string $CN22ContentCurrencyCode): self
    {
        $this->CN22ContentCurrencyCode = $CN22ContentCurrencyCode;
        return $this;
    }

    public function setCN22ContentCountryOfOrigin(?string $CN22ContentCountryOfOrigin): self
    {
        $this->CN22ContentCountryOfOrigin = $CN22ContentCountryOfOrigin;
        return $this;
    }

    public function setCN22ContentTariffNumber(?string $CN22ContentTariffNumber): self
    {
        $this->CN22ContentTariffNumber = $CN22ContentTariffNumber;
        return $this;
    }
}
