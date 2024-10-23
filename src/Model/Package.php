<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class Package
{
    public ?string $description = null;
    public ?string $numOfPieces = null;
    public Packaging $packaging;
    public ?Dimension $dimensions = null;
    public PackageWeight $packageWeight;

    public function __construct()
    {
        $this->packaging = new Packaging();
        $this->packageWeight = new PackageWeight();
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setNumOfPieces(?string $numOfPieces): self
    {
        $this->numOfPieces = $numOfPieces;
        return $this;
    }

    public function getPackaging(): Packaging
    {
        return $this->packaging;
    }

    public function getPackageWeight(): PackageWeight
    {
        return $this->packageWeight;
    }
}
