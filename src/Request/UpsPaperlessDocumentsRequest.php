<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestAuthBearer;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestException;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\ScraperUPS\Model\UploadRequest\UploadRequest;
use Scraper\ScraperUPS\Serializer\NameConverter\CamelCaseToPascalCaseNameConverter;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

#[Scraper(method: Method::POST, path: '/api/paperlessdocuments/{version}/upload')]
class UpsPaperlessDocumentsRequest extends UpsRequest implements RequestAuthBearer, RequestBody, RequestException, RequestHeaders
{
    private string $token;
    private UploadRequest $uploadRequest;

    public function __construct(
        string $environnement,
        string $merchantId,
        private readonly string $transId
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
            'ShipperNumber' => $this->merchantId,
            'transId' => $this->transId,
        ];
    }

    public function getBody(): string
    {
        $nameConverter = new CamelCaseToPascalCaseNameConverter();
        $normalizer = new ObjectNormalizer(null, $nameConverter);

        return (new Serializer([$normalizer], [new JsonEncoder()]))->serialize([
            'UploadRequest' => $this->uploadRequest,
        ], JsonEncoder::FORMAT, [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]);
    }

    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function getVersion(): string
    {
        return 'v2';
    }

    public function setUploadRequest(UploadRequest $uploadRequest): self
    {
        $this->uploadRequest = $uploadRequest;
        return $this;
    }
}
