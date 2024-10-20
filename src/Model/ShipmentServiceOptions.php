<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class ShipmentServiceOptions
{
    public ?DeliveryConfirmation $deliveryConfirmation = null;
    public ?InternationalForms $internationalForms = null;
    public ?string $saturdayDeliveryIndicator = null;

    public function setDeliveryConfirmation(DeliveryConfirmation $deliveryConfirmation): self
    {
        $this->deliveryConfirmation = $deliveryConfirmation;
        return $this;
    }

    public function setInternationalForms(InternationalForms $internationalForms): self
    {
        $this->internationalForms = $internationalForms;
        return $this;
    }

    public function setSaturdayDeliveryIndicator(?string $saturdayDeliveryIndicator): self
    {
        $this->saturdayDeliveryIndicator = $saturdayDeliveryIndicator;
        return $this;
    }
}
