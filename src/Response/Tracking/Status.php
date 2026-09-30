<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

use Scraper\ScraperUPS\Enum\TrackingStatusTypeEnum;

class Status
{
    public ?string $type = null;
    public ?string $description = null;
    public ?string $simplifiedTextDescription = null;
    public ?string $statusCode = null;
    public ?string $code = null;

    public function getTypeEnum(): ?TrackingStatusTypeEnum
    {
        return null === $this->type ? null : TrackingStatusTypeEnum::tryFrom($this->type);
    }

    public function isDelivered(): bool
    {
        return TrackingStatusTypeEnum::DELIVERED === $this->getTypeEnum();
    }
}
