<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class Contacts
{
    public ?SoldTo $soldTo = null;

    public function setSoldTo(?SoldTo $soldTo): self
    {
        $this->soldTo = $soldTo;
        return $this;
    }
}
