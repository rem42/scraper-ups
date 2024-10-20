<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class Unit
{
    public ?string $number = null;
    public UnitOfMeasurement $unitOfMeasurement;
    public ?string $value = null;

    public function __construct()
    {
        $this->unitOfMeasurement = new UnitOfMeasurement();
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getUnitOfMeasurement(): UnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
}
