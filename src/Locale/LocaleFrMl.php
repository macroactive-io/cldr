<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMl;

/**
 * Class LocaleFrMl
 * @psalm-immutable
 */
class LocaleFrMl extends LocaleFr
{
    public function territory(): TerritoryMl
    {
        return new TerritoryMl();
    }
}
