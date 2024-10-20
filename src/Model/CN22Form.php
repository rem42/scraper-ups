<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class CN22Form
{
    public ?string $labelSize = null;
    public ?string $printsPerPage = null;
    public ?string $labelPrintType = null;
    public ?string $CN22Type = null;
    /** @var array<int, CN22Content> */
    public array $CN22Content = [];

    public function setLabelSize(?string $labelSize): self
    {
        $this->labelSize = $labelSize;
        return $this;
    }

    public function setPrintsPerPage(?string $printsPerPage): self
    {
        $this->printsPerPage = $printsPerPage;
        return $this;
    }

    public function setLabelPrintType(?string $labelPrintType): self
    {
        $this->labelPrintType = $labelPrintType;
        return $this;
    }

    public function setCN22Type(?string $CN22Type): self
    {
        $this->CN22Type = $CN22Type;
        return $this;
    }

    public function addCN22Content(CN22Content $CN22Content): self
    {
        $this->CN22Content[] = $CN22Content;
        return $this;
    }
}
