<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMy;

/**
 * Class LocaleEnMy
 * @psalm-immutable
 */
class LocaleEnMy extends LocaleEn
{
    public function territory(): TerritoryMy
    {
        return new TerritoryMy();
    }
}
