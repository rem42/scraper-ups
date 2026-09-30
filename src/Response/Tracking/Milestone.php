<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Response\Tracking;

class Milestone
{
    public ?string $category = null;
    public ?string $code = null;
    public ?bool $current = null;
    public ?string $description = null;
    public ?string $linkedActivity = null;
    public ?string $state = null;
    public ?SubMilestone $subMilestone = null;
}
