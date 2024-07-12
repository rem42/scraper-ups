<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Enum;

enum RequestOptionEnum: string
{
    case NON_VALIDATE = 'nonvalidate';
    case VALIDATE = 'validate';
}
