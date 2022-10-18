<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMg;

/**
 * Class LocaleEnMg
 * @psalm-immutable
 */
class LocaleEnMg extends LocaleEn
{
    public function territory(): TerritoryMg
    {
        return new TerritoryMg();
    }
}
