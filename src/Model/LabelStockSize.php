<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class LabelStockSize
{
    public ?string $height = null;
    public ?string $width = null;

    public function setHeight(?string $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function setWidth(?string $width): self
    {
        $this->width = $width;
        return $this;
    }
}
