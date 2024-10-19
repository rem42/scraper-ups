<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Model;

class InternationalForms
{
    /** @var array<int, string>  */
    public array $formType = [];
    /** @var array<int, Product>  */
    public array $products = [];
    public ?string $invoiceDate = null;
    public ?string $purchaseOrderNumber = null;
    public ?string $currencyCode = null;
    
    public function addFormType(string $formType): self
    {
        $this->formType[] = $formType;
        return $this;
    }
    
    public function addProduct(Product $product): self
    {
        $this->products[] = $product;
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

    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}
