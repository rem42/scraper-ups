<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class CN22ContentWeight
{
    public UnitOfMeasurement $unitOfMeasurement;
    public ?string $weight = null;

    public function __construct()
    {
        $this->unitOfMeasurement = new UnitOfMeasurement();
    }

    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    public function getUnitOfMeasurement(): UnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
}
