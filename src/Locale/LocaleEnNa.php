<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNa;

/**
 * @psalm-immutable
 */
class LocaleEnNa extends LocaleEn
{
    public function territory(): TerritoryNa
    {
        return new TerritoryNa();
    }
}
