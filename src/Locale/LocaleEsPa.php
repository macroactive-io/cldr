<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPa;

/**
 * Class LocaleEsPa
 * @psalm-immutable
 */
class LocaleEsPa extends LocaleEs
{
    public function territory(): TerritoryPa
    {
        return new TerritoryPa();
    }
}
