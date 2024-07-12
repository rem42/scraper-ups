<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Enum;

enum LabelImageFormatEnum: string
{
    case GIF = 'GIF';
    case EPL = 'EPL';
    case SPL = 'SPL';
    case ZPL = 'ZPL';
}
