<?php

declare(strict_types=1);

namespace Macroactive\Cldr;

use DomainException;
use Macroactive\Cldr\Territory\TerritoryInterface;

use function class_exists;
use function sprintf;

final class Territory
{
    /**
     * @param non-empty-string $code
     */
    public static function create(string $code): TerritoryInterface
    {
        $className = __NAMESPACE__ . '\\Territory\\Territory' . ucfirst(strtolower($code));

        if (class_exists($className)) {
            return new $className();
        }

        throw new DomainException(sprintf('Cannot find territory for code "%s"', $code));
    }
}
