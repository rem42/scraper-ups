<?php

namespace Scraper\ScraperUPS\Model;

class Shipper
{
    public ?string $name = null;
    public ?string $attentionName = null;
    public ?string $taxIdentificationNumber = null;
    public ?Phone $phone = null;
    public ?string $shipperNumber = null;
    public ?string $faxNumber = null;
    public ?Address $address = null;
}
