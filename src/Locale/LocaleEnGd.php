<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGd;

/**
 * @psalm-immutable
 */
class LocaleEnGd extends LocaleEn
{
    public function territory(): TerritoryGd
    {
        return new TerritoryGd();
    }
}
