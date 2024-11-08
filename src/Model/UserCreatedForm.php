<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class UserCreatedForm
{
    public function __construct(
        public readonly string $DocumentID,
    ) {}
}
