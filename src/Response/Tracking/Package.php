<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class Package
{
    public ?string $trackingNumber = null;

    /** @var array<int, DeliveryDate> */
    public array $deliveryDate = [];
    public ?DeliveryTime $deliveryTime = null;
    public ?DeliveryInformation $deliveryInformation = null;

    /** @var array<int, Activity> */
    public array $activity = [];

    /** @var array<int, Milestone> */
    public array $milestones = [];
    public ?Status $currentStatus = null;

    /** @var array<int, PackageAddress> */
    public array $packageAddress = [];
    public ?Weight $weight = null;
    public ?Service $service = null;

    /** @var array<int, ReferenceNumber> */
    public array $referenceNumber = [];
    public ?Dimension $dimension = null;
    public ?int $packageCount = null;

    /** @var array<int, AlternateTrackingNumber> */
    public array $alternateTrackingNumber = [];

    /**
     * UPS returns activities from the most recent to the oldest.
     */
    public function getLastActivity(): ?Activity
    {
        return $this->activity[0] ?? null;
    }

    public function isDelivered(): bool
    {
        return $this->currentStatus?->isDelivered() ?? $this->getLastActivity()?->status?->isDelivered() ?? false;
    }
}
