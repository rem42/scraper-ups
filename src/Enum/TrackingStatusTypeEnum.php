<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Enum;

enum TrackingStatusTypeEnum: string
{
    case DELIVERED = 'D';
    case IN_TRANSIT = 'I';
    case EXCEPTION = 'X';
    case PICKUP = 'P';
    case MANIFEST_PICKUP = 'M';
    case ORDER_PROCESSED = 'MV';
    case RETURNED_TO_SHIPPER = 'RS';
    case DELIVERED_ORIGIN_CFS = 'DO';
    case DELIVERED_DESTINATION_CFS = 'DD';
    case WAREHOUSING = 'W';
    case NOT_AVAILABLE = 'NA';
    case OUT_FOR_DELIVERY = 'O';
}
