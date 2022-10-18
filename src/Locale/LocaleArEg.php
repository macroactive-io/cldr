<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryEg;

/**
 * @psalm-immutable
 */
class LocaleArEg extends LocaleAr
{
    public function territory(): TerritoryEg
    {
        return new TerritoryEg();
    }
}
