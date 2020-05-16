<?php

declare(strict_types=1);

namespace Venomousboy\SearchQuery;

final class OrderQuery
{
    private string $property;

    private Ordering $ordering;

    public function __construct(string $property, Ordering $ordering)
    {
        $this->property = $property;
        $this->ordering = $ordering;
    }

    public function getProperty(): string
    {
        return $this->property;
    }

    public function getOrdering(): Ordering
    {
        return $this->ordering;
    }
}