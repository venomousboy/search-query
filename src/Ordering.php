<?php

declare(strict_types=1);

namespace Venomousboy\SearchQuery;

use LitGroup\Enumerable\Enumerable;

final class Ordering extends Enumerable
{
    public static function asc(): self
    {
        return self::createEnum('asc');
    }

    public static function desc(): self
    {
        return self::createEnum('desc');
    }
}