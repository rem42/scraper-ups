<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model\UploadRequest;

class TransactionReference
{
    public ?string $customerContext = null;

    public function setCustomerContext(?string $customerContext): self
    {
        $this->customerContext = $customerContext;
        return $this;
    }
}
