<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTd;

/**
 * Class LocaleArTd
 * @psalm-immutable
 */
class LocaleArTd extends LocaleAr
{
    public function territory(): TerritoryTd
    {
        return new TerritoryTd();
    }
}
