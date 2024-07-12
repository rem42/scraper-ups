<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class Phone
{
    public ?string $number = null;
    public ?string $extension = null;

    public function setNumber(?string $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;
        return $this;
    }
}
