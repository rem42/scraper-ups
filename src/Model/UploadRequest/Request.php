<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model\UploadRequest;

class Request
{
    public ?string $subVersion = null;
    public ?string $requestOption = null;
    public ?TransactionReference $transactionReference = null;

    public function setSubVersion(?string $subVersion): self
    {
        $this->subVersion = $subVersion;
        return $this;
    }

    public function setRequestOption(?string $requestOption): self
    {
        $this->requestOption = $requestOption;
        return $this;
    }

    public function setTransactionReference(?TransactionReference $transactionReference): self
    {
        $this->transactionReference = $transactionReference;
        return $this;
    }
}
