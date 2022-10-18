<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMr;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnMr extends LocaleFfLatn
{
    public function territory(): TerritoryMr
    {
        return new TerritoryMr();
    }
}
