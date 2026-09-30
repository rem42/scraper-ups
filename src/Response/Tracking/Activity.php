<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class Activity
{
    public ?Location $location = null;
    public ?Status $status = null;

    /** Format: Ymd */
    public ?string $date = null;

    /** Format: His */
    public ?string $time = null;

    /** Format: Ymd */
    public ?string $gmtDate = null;

    /** Format: +HH:MM */
    public ?string $gmtOffset = null;

    /** Format: H:i:s */
    public ?string $gmtTime = null;

    /**
     * Local date time of the activity.
     */
    public function getDateTime(): ?\DateTimeImmutable
    {
        if (null === $this->date || '' === $this->date) {
            return null;
        }

        return \DateTimeImmutable::createFromFormat('!YmdHis', $this->date . str_pad($this->time ?? '', 6, '0')) ?: null;
    }
}
