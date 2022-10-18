<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGy;

/**
 * @psalm-immutable
 */
class LocaleEnGy extends LocaleEn
{
    public function territory(): TerritoryGy
    {
        return new TerritoryGy();
    }
}
