<?php

declare(strict_types=1);

namespace Venomousboy\SearchQuery;

final class FilterQuery
{
    private FilterQueryKey $key;

    /** @var mixed */
    private $value;

    public function __construct(string $property, ComparisonType $comparison, /* mixed */ $value)
    {
        $this->key = new FilterQueryKey($property, $comparison);
        $this->value = $value;
    }

    public static function createEqFilter(string $property, $value): self
    {
        return new self($property, ComparisonType::eq(), $value);
    }

    public function getProperty(): string
    {
        return $this->getKey()->getProperty();
    }

    public function getComparison(): ComparisonType
    {
        return $this->getKey()->getComparison();
    }

    public function getValue() /** mixed */
    {
        return $this->value;
    }

    public function getKey(): FilterQueryKey
    {
        return $this->key;
    }

    public function isSame(self $other): bool
    {
        return $this->getKey()->equals($other->getKey());
    }
}