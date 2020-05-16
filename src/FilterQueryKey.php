<?php

declare(strict_types=1);

namespace Venomousboy\SearchQuery;

final class FilterQueryKey
{
    private string $property;

    private ComparisonType $comparison;

    public function __construct(string $property, ComparisonType $comparison)
    {
        $this->property = $property;
        $this->comparison = $comparison;
    }

    public function equals($other): bool
    {
        /** @var self $other */
        return $this->getProperty() === $other->getProperty() && $this->getComparison()->equals($other->getComparison());
    }

    public function getProperty(): string
    {
        return $this->property;
    }

    public function getComparison(): ComparisonType
    {
        return $this->comparison;
    }
}