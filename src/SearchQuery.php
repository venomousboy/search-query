<?php

declare(strict_types=1);

namespace Venomousboy\SearchQuery;

final class SearchQuery
{
    private FuzzySearchQuery $fuzzy;

    /**
     * @var FilterQuery[]
     */
    private array $filters;

    /**
     * @var OrderQuery[]
     */
    private array $orderQueries;

    private ?LimitationQueryImmutable $limitation;

    /**
     * @param FilterQuery[] $filters
     * @param OrderQuery[] $orderQueries
     */
    public function __construct(
        FuzzySearchQuery $fuzzy,
        array $filters,
        array $orderQueries,
        ?LimitationQueryImmutable $limitation
    ) {
        $this->fuzzy = $fuzzy;
        $this->filters = $filters;
        $this->orderQueries = $orderQueries;
        $this->limitation = $limitation;
    }

    public function getFuzzy(): FuzzySearchQuery
    {
        return $this->fuzzy;
    }

    /**
     * @return FilterQuery[]
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * @return OrderQuery[]
     */
    public function getOrderQueries(): array
    {
        return $this->orderQueries;
    }

    public function getLimitation(): ?LimitationQueryImmutable
    {
        return $this->limitation;
    }
}