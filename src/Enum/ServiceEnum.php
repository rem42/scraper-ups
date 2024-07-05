<?php

namespace Scraper\ScraperUPS\Enum;

enum ServiceEnum: string
{
    case NEXT_DAY_AIR = "01";
    case SECOND_DAY_AIR = "02";
    case GROUND = "03";
    case WORLDWIDE_EXPRESS = "07";
    case WORLDWIDE_EXPEDITED = "08";
    case STANDARD = "11";
    case THREE_DAY_SELECT = "12";
    case NEXT_DAY_AIR_SAVER = "13";
    case NEXT_DAY_AIR_EARLY_AM = "14";
    case WORLDWIDE_ECONOMY_DDU = "17";
    case WORLDWIDE_EXPRESS_PLUS = "54";
    case SECOND_DAY_AIR_AM = "59";
    case SAVER = "65";
    case FIRST_CLASS_MAIL = "M2";
    case PRIORITY_MAIL = "M3";
    case EXPEDITED_MAIL_INNOVATIONS = "M4";
    case STANDARD_MAIL_INNOVATIONS = "M5";
    case FIRST_CLASS_MAIL_INNOVATIONS = "M6";
    case PRIORITY_MAIL_INNOVATIONS = "M7";
    case ACCESS_POINT_ECONOMY = "70";
    case WORLDWIDE_EXPRESS_FREIGHT_MIDDAY = "71";
    case WORLDWIDE_ECONOMY_DDP = "72";
    case EXPRESS_12 = "74";
    case HEAVY_GOODS = "75";
    case TODAY_STANDARD = "82";
    case TODAY_DEDICATED_COURIER = "83";
    case TODAY_INTERCITY = "84";
    case TODAY_EXPRESS = "85";
    case TODAY_EXPRESS_SAVER = "86";
    case WORLDWIDE_EXPRESS_FREIGHT = "96";

}
