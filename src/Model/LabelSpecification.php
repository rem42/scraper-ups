<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class LabelSpecification
{
    public LabelImageFormat $labelImageFormat;
    public LabelStockSize $labelStockSize;

    public function __construct()
    {
        $this->labelImageFormat = new LabelImageFormat();
        $this->labelStockSize = new LabelStockSize();
    }

    public function getLabelImageFormat(): LabelImageFormat
    {
        return $this->labelImageFormat;
    }

    public function getLabelStockSize(): LabelStockSize
    {
        return $this->labelStockSize;
    }
}
