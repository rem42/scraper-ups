<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Tests\Request;

use PHPUnit\Framework\MockObject\Stub;
use Scraper\Scraper\Client;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @internal
 */
trait RequestTrait
{
    private ResponseInterface|Stub $responseInterface;

    /** @var array{method: string, url: string, options: array<string, mixed>}|null */
    private ?array $lastRequest = null;

    protected function getClient(string $fixture, int $statusCode = 200): Client
    {
        $this->responseInterface = $this->createStub(ResponseInterface::class);
        $this->responseInterface
            ->method('getStatusCode')->willReturn($statusCode)
        ;
        $this->responseInterface
            ->method('getContent')->willReturn(file_get_contents(__DIR__ . '/../fixtures/' . $fixture))
        ;
        $httpClient = $this->createStub(HttpClientInterface::class);
        $httpClient
            ->method('request')->willReturnCallback([$this, 'requestCallback'])
        ;

        return new Client($httpClient);
    }

    /**
     * @param array<string, mixed> $options
     */
    public function requestCallback(string $method, string $url, array $options): ResponseInterface
    {
        $this->lastRequest = ['method' => $method, 'url' => $url, 'options' => $options];

        return $this->responseInterface;
    }
}
