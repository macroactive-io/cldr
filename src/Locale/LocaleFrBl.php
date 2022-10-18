<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBl;

/**
 * @psalm-immutable
 */
class LocaleFrBl extends LocaleFr
{
    public function territory(): TerritoryBl
    {
        return new TerritoryBl();
    }
}
