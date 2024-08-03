<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class AlternateDeliveryAddress
{
    public ?string $attentionName = null;
    public ?string $name = null;
    public ?string $upsAccessPointId = null;
    public ?Address $address = null;

    public function setAttentionName(?string $attentionName): self
    {
        $this->attentionName = $attentionName;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setUpsAccessPointId(?string $upsAccessPointId): self
    {
        $this->upsAccessPointId = $upsAccessPointId;
        return $this;
    }

    public function setAddress(?Address $address): self
    {
        $this->address = $address;
        return $this;
    }
}
