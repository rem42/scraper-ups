<?php

namespace Scraper\ScraperUPS\Enum;

enum PackagingEnum: string
{
    case UPS_LETTER = "01";
    case CUSTOMER_SUPPLIED_PACKAGE = "02";
    case TUBE = "03";
    case PAK = "04";
    case UPS_EXPRESS_BOX = "21";
    case UPS_25KG_BOX = "24";
    case UPS_10KG_BOX = "25";
    case PALLET = "30";
    case SMALL_EXPRESS_BOX = "2a";
    case MEDIUM_EXPRESS_BOX = "2b";
    case LARGE_EXPRESS_BOX = "2c";
    case FLATS = "56";
    case PARCELS = "57";
    case BPM = "58";
    case FIRST_CLASS = "59";
    case PRIORITY = "60";
    case MACHINEABLES = "61";
    case IRREGULARS = "62";
    case PARCEL_POST = "63";
    case BPM_PARCEL = "64";
    case MEDIA_MAIL = "65";
    case BPM_FLAT = "66";
    case STANDARD_FLAT = "67";
}
