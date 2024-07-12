<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Response;

class Response
{
    public ?ResponseStatus $responseStatus = null;
    public ?string $transactionReference = null;
    /** @var array<int, Error> */
    public array $errors = [];

    public function addError(Error $error): self
    {
        $this->errors[] = $error;
        return $this;
    }
}
