<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryEr;

/**
 * @psalm-immutable
 */
class LocaleAaEr extends LocaleAa
{
    public function territory(): TerritoryEr
    {
        return new TerritoryEr();
    }
}
