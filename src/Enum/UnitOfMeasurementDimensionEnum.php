<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Enum;

enum UnitOfMeasurementDimensionEnum: string
{
    case IN = 'IN';
    case CM = 'CM';
    case METRIC_UNITS = '00';
    case ENGLISH_UNITS = '01';
}
