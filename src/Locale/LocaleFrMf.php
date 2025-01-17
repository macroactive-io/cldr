<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMf;

/**
 * @psalm-immutable
 */
class LocaleFrMf extends LocaleFr
{
    public function territory(): TerritoryMf
    {
        return new TerritoryMf();
    }
}
