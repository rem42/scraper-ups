<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestAuthBasic;
use Scraper\Scraper\Request\RequestBody;

#[Scraper(method: Method::POST, path: '/security/v1/oauth/token')]
class UpsCreateTokenRequest extends UpsRequest implements RequestAuthBasic, RequestBody
{
    public function __construct(
        string $environnement,
        string $merchantId,
        private readonly string $clientId,
        private readonly string $clientSecret,
    ) {
        parent::__construct($environnement, $merchantId);
    }

    public function getBody(): array
    {
        return [
            'grant_type' => 'client_credentials',
        ];
    }

    public function getAuthBasic(): string
    {
        return $this->clientId . ':' . $this->clientSecret;
    }
}
