<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMt;

/**
 * @psalm-immutable
 */
class LocaleEnMt extends LocaleEn
{
    public function territory(): TerritoryMt
    {
        return new TerritoryMt();
    }
}
