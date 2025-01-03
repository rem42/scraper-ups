<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Enum;

enum SimpleRateEnum: string
{
    case XS = 'XS';
    case S = 'S';
    case M = 'M';
    case L = 'L';
    case XL = 'XL';
}
