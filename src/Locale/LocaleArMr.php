<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMr;

/**
 * @psalm-immutable
 */
class LocaleArMr extends LocaleAr
{
    public function territory(): TerritoryMr
    {
        return new TerritoryMr();
    }
}
