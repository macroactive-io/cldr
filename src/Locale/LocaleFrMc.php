<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMc;

/**
 * @psalm-immutable
 */
class LocaleFrMc extends LocaleFr
{
    public function territory(): TerritoryMc
    {
        return new TerritoryMc();
    }
}
