<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\UploadRequest;

class FormsHistoryDocumentId
{
    /** @var array<int, string> */
    public array $documentID = [];

    public function addDocumentID(string $documentID): self
    {
        $this->documentID[] = $documentID;
        return $this;
    }
}
