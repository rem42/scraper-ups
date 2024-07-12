<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class LabelImageFormat
{
    public ?string $code = null;
    public ?string $description = null;

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
}
