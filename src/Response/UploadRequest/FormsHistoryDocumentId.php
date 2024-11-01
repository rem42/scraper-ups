<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\UploadRequest;

class FormsHistoryDocumentId
{
    /** @var array<int, string> */
    public array $documentId = [];

    public function addDocumentId(string $documentId): self
    {
        $this->documentId[] = $documentId;
        return $this;
    }
}
