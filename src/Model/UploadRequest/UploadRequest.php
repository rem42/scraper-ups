<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model\UploadRequest;

class UploadRequest
{
    public Request $request;
    public ?string $shipperNumber = null;
    public array $userCreatedForm = [];

    public function __construct()
    {
        $this->request = new Request();
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function setShipperNumber(?string $shipperNumber): self
    {
        $this->shipperNumber = $shipperNumber;
        return $this;
    }

    public function addUserCreatedForm(UserCreatedForm $userCreatedForm): self
    {
        $this->userCreatedForm[] = $userCreatedForm;
        return $this;
    }
}
