<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class BillReceiver
{
    public ?string $accountNumber = null;

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }
}
