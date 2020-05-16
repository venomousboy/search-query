<?php

declare(strict_types=1);

namespace Venomousboy\SearchQuery;

final class LimitationQueryImmutable
{
    private const DEFAULT_OFFSET = 0;
    private const DEFAULT_LIMIT = 500;

    private ?int $offset;
    private ?int $limit;
    private ?int $maxAllowedLimit;

    private function __construct(?int $offset, ?int $limit, ?int $maxAllowedLimit)
    {
        $this->offset = $offset;
        $this->limit = $limit;
        $this->maxAllowedLimit = $maxAllowedLimit;
    }

    public static function create(?int $offset, ?int $limit): self
    {
        return new self($offset, $limit, null);
    }

    public function setMaxAllowedLimit(int $maxAllowedLimit): self
    {
        return new self($this->limit, $this->offset, $maxAllowedLimit);
    }

    public function getOffset(): int
    {
        return $this->offset ?? self::DEFAULT_OFFSET;
    }

    public function getLimit(): int
    {
        $limit = $this->limit ?? self::DEFAULT_LIMIT;
        $maxAllowedLimit = $this->maxAllowedLimit ?? self::DEFAULT_LIMIT;

        if ($limit >= $maxAllowedLimit) {
            return $maxAllowedLimit;
        }

        return $limit;
    }
}