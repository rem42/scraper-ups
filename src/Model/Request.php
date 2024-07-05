<?php

namespace Scraper\ScraperUPS\Model;

class Request
{
    public ?string $subVersion = null;
    public ?string $requestOption = null;
    public ?TransactionReference $transactionReference = null;
}
