<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Enum;

enum UPSPremierCategoryEnum: string
{
    case UPS_PREMIER_SILVER = '01';
    case UPS_PREMIER_GOLD = '02';
    case UPS_PREMIER_PLATINUM = '03';
}
