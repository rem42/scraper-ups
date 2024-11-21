<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class Product
{
    public ?string $description = null;
    public ?string $originCountryCode = null;
    public ?string $commodityCode = null;
    public ?string $partNumber = null;
    public ?Unit $unit = null;
    public ?ProductWeight $productWeight = null;

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setOriginCountryCode(?string $originCountryCode): self
    {
        $this->originCountryCode = $originCountryCode;
        return $this;
    }

    public function setCommodityCode(?string $commodityCode): self
    {
        $this->commodityCode = $commodityCode;
        return $this;
    }

    public function setPartNumber(?string $partNumber): self
    {
        $this->partNumber = $partNumber;
        return $this;
    }

    public function setUnit(?Unit $unit): self
    {
        $this->unit = $unit;
        return $this;
    }

    public function setProductWeight(?ProductWeight $productWeight): self
    {
        $this->productWeight = $productWeight;
        return $this;
    }
}
