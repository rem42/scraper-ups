<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class DeliveryDate
{
    /** SDD: scheduled, RDD: rescheduled, DEL: delivered */
    public ?string $type = null;

    /** Format: Ymd */
    public ?string $date = null;

    public function getDateTime(): ?\DateTimeImmutable
    {
        if (null === $this->date || '' === $this->date) {
            return null;
        }

        return \DateTimeImmutable::createFromFormat('!Ymd', $this->date) ?: null;
    }
}
