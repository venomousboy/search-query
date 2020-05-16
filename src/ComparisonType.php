<?php

declare(strict_types=1);

namespace Venomousboy\SearchQuery;

use LitGroup\Enumerable\Enumerable;

final class ComparisonType extends Enumerable
{
    public static function eq(): self
    {
        return self::createEnum('eq');
    }

    public static function neq(): self
    {
        return self::createEnum('neq');
    }

    public static function lt(): self
    {
        return self::createEnum('lt');
    }

    public static function gt(): self
    {
        return self::createEnum('gt');
    }

    public static function lte(): self
    {
        return self::createEnum('lte');
    }

    public static function gte(): self
    {
        return self::createEnum('gte');
    }

    public static function in(): self
    {
        return self::createEnum('in');
    }

    public static function notIn(): self
    {
        return self::createEnum('nin');
    }

    public static function isNull(): self
    {
        return self::createEnum('isNull');
    }

    public static function isNotNull(): self
    {
        return self::createEnum('isNotNull');
    }
}