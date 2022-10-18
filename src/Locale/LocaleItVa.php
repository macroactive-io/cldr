<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryVa;

/**
 * Class LocaleItVa
 * @psalm-immutable
 */
class LocaleItVa extends LocaleIt
{
    public function territory(): TerritoryVa
    {
        return new TerritoryVa();
    }
}
