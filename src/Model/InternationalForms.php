<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class InternationalForms
{
    /** @var array<int, string> */
    public array $formType = [];
    public ?CN22Form $CN22Form = null;
    public ?Contacts $contacts = null;
    /** @var array<int, Product> */
    public array $product = [];
    public ?string $invoiceDate = null;
    public ?string $purchaseOrderNumber = null;
    public ?string $reasonForExport = null;
    public ?string $currencyCode = null;

    public function addFormType(string $formType): self
    {
        $this->formType[] = $formType;
        return $this;
    }

    public function setCN22Form(?CN22Form $CN22Form): self
    {
        $this->CN22Form = $CN22Form;
        return $this;
    }

    public function setContacts(?Contacts $contacts): self
    {
        $this->contacts = $contacts;
        return $this;
    }

    public function setFormType(array $formType): self
    {
        $this->formType = $formType;
        return $this;
    }

    public function addProduct(Product $product): self
    {
        $this->product[] = $product;
        return $this;
    }

    public function setInvoiceDate(?string $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): self
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }

    public function setReasonForExport(?string $reasonForExport): self
    {
        $this->reasonForExport = $reasonForExport;
        return $this;
    }

    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}
