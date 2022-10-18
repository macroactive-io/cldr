<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryVg;

/**
 * @psalm-immutable
 */
class LocaleEnVg extends LocaleEn
{
    public function territory(): TerritoryVg
    {
        return new TerritoryVg();
    }
}
