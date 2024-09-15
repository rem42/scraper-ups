<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Enum;

enum MasterShipmentChgTypeEnum: string
{
    /*
     * Cost And Freight
     *
     * Shipper pays to point of import, consignee pays balance.
     */
    case CAF = 'CAF';
    /*
     * Freight Collect
     *
     * Consignee (with valid UPS account) pays all shipping charges
     */
    case COL = 'COL';
    /*
     * Delivered Duty Paid
     *
     * Shipper pays shipping and duty, consignee pays the Value Added Tax (VAT)
     */
    case DDP = 'DDP';
    /*
     * Free On Board
     *
     * Shipper pays to point to export, consignee pays balance
     */
    case FOB = 'FOB';
    /*
     * Prepaid
     *
     * Shipper pays all shipping charges
     */
    case PRE = 'PRE';
    /*
     * Free Domicile
     *
     * Child Shipper pays for shipping, duties and taxes
     */
    case SDT = 'SDT';
}
