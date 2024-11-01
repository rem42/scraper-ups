<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Enum;

enum UserCreatedFormDocumentTypeEnum: string
{
    case AUTHORISATION_FORM = '001';
    case COMMERCIAL_INVOICE = '002';
    case CERTIFICATE_OF_ORIGIN = '003';
    case EXPORT_ACCOMPANYING_DOCUMENT = '004';
    case EXPORT_LICENSE = '005';
    case IMPORT_PERMIT = '006';
    case ONE_TIME_NAFTA = '007';
    case OTHER_DOCUMENT = '008';
    case POWER_OF_ATTORNEY = '009';
    case PACKING_LIST = '010';
    case SED_DOCUMENT = '011';
    case SHIPPER_LETTER_INSTRUCTIONS = '012';
    case DECLARATION = '013';
}
