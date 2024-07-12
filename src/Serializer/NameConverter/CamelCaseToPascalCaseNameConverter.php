<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Serializer\NameConverter;

use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

class CamelCaseToPascalCaseNameConverter implements NameConverterInterface
{
    public function normalize(string $propertyName): string
    {
        return ucfirst($propertyName);
    }

    public function denormalize(string $propertyName): string
    {
        return lcfirst($propertyName);
    }
}
