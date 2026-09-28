<?php

declare(strict_types=1);

namespace Scraper\ScraperUPS\Serializer\NameConverter;

use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

class CamelCaseToPascalCaseNameConverter implements NameConverterInterface
{
    public function normalize(string $propertyName, ?string $class = null, ?string $format = null, array $context = []): string
    {
        return ucfirst($propertyName);
    }

    public function denormalize(string $propertyName, ?string $class = null, ?string $format = null, array $context = []): string
    {
        return lcfirst($propertyName);
    }
}
