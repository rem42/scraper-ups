<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model\UploadRequest;

class UserCreatedForm
{
    public ?string $userCreatedFormFileName = null;
    public ?string $userCreatedFormFile = null;
    public ?string $userCreatedFormFileFormat = null;
    public ?string $userCreatedFormDocumentType = null;

    public function setUserCreatedFormFileName(?string $userCreatedFormFileName): self
    {
        $this->userCreatedFormFileName = $userCreatedFormFileName;
        return $this;
    }

    public function setUserCreatedFormFile(?string $userCreatedFormFile): self
    {
        $this->userCreatedFormFile = $userCreatedFormFile;
        return $this;
    }

    public function setUserCreatedFormFileFormat(?string $userCreatedFormFileFormat): self
    {
        $this->userCreatedFormFileFormat = $userCreatedFormFileFormat;
        return $this;
    }

    public function setUserCreatedFormDocumentType(?string $userCreatedFormDocumentType): self
    {
        $this->userCreatedFormDocumentType = $userCreatedFormDocumentType;
        return $this;
    }
}
