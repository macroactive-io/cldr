<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPm;

/**
 * @psalm-immutable
 */
class LocaleFrPm extends LocaleFr
{
    public function territory(): TerritoryPm
    {
        return new TerritoryPm();
    }
}
