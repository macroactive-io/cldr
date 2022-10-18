<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAr;

/**
 * @psalm-immutable
 */
class LocaleEsAr extends LocaleEs
{
    public function territory(): TerritoryAr
    {
        return new TerritoryAr();
    }
}
