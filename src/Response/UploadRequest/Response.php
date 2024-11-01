<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\UploadRequest;

class Response
{
    public ?ResponseStatus $responseStatus = null;
    /** @var array<int, Alert> */
    public array $alert = [];
    public ?TransactionReference $transactionReference = null;
    /** @var array<int, Error> */
    public array $errors = [];

    public function addError(Error $error): self
    {
        $this->errors[] = $error;
        return $this;
    }

    public function addAlert(Alert $alert): self
    {
        $this->alert[] = $alert;
        return $this;
    }
}
