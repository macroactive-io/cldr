<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKm;

/**
 * @psalm-immutable
 */
class LocaleArKm extends LocaleAr
{
    public function territory(): TerritoryKm
    {
        return new TerritoryKm();
    }
}
