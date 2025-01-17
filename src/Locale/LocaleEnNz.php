<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNz;

/**
 * @psalm-immutable
 */
class LocaleEnNz extends LocaleEn
{
    public function territory(): TerritoryNz
    {
        return new TerritoryNz();
    }
}
