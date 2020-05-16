<?php

declare(strict_types=1);

namespace Venomousboy\SearchQuery;

final class FuzzySearchQuery
{
    private ?string $query;

    /** @var string[] */
    private array $properties;

    public function __construct(?string $query, array $properties)
    {
        $this->query = $query;
        $this->properties = $properties;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    /**
     * @return array|string[]
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    public function isEmpty(): bool
    {
        return empty($this->getQuery()) || empty($this->getProperties());
    }
}