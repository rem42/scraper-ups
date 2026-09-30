<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestAuthBearer;
use Scraper\Scraper\Request\RequestException;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(method: Method::GET, path: '/api/track/{version}/details/{inquiryNumber}')]
class UpsTrackingRequest extends UpsRequest implements RequestAuthBearer, RequestException, RequestQuery
{
    private string $token;
    private string $locale = 'en_US';
    private bool $returnSignature = false;
    private bool $returnMilestones = false;
    private bool $returnPOD = false;

    public function __construct(
        string $environnement,
        string $merchantId,
        private readonly string $inquiryNumber,
        private readonly string $transId,
        private readonly string $transactionSrc = 'scraper',
    ) {
        parent::__construct($environnement, $merchantId);
    }

    public function getBearer(): string
    {
        return $this->token;
    }

    public function isThrow(): bool
    {
        return false;
    }

    public function getHeaders(): array
    {
        return [
            ...parent::getHeaders(),
            'transId' => $this->transId,
            'transactionSrc' => $this->transactionSrc,
        ];
    }

    public function getQuery(): array
    {
        return [
            'locale' => $this->locale,
            'returnSignature' => $this->returnSignature ? 'true' : 'false',
            'returnMilestones' => $this->returnMilestones ? 'true' : 'false',
            'returnPOD' => $this->returnPOD ? 'true' : 'false',
        ];
    }

    public function getVersion(): string
    {
        return 'v1';
    }

    public function getInquiryNumber(): string
    {
        return rawurlencode($this->inquiryNumber);
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function setReturnSignature(bool $returnSignature): self
    {
        $this->returnSignature = $returnSignature;

        return $this;
    }

    public function setReturnMilestones(bool $returnMilestones): self
    {
        $this->returnMilestones = $returnMilestones;

        return $this;
    }

    public function setReturnPOD(bool $returnPOD): self
    {
        $this->returnPOD = $returnPOD;

        return $this;
    }
}
