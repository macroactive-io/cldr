<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryEr;

/**
 * @psalm-immutable
 */
class LocaleEnEr extends LocaleEn
{
    public function territory(): TerritoryEr
    {
        return new TerritoryEr();
    }
}
