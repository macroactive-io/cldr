<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMr;

/**
 * @psalm-immutable
 */
class LocaleFrMr extends LocaleFr
{
    public function territory(): TerritoryMr
    {
        return new TerritoryMr();
    }
}
