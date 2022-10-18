<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPy;

/**
 * @psalm-immutable
 */
class LocaleEsPy extends LocaleEs
{
    public function territory(): TerritoryPy
    {
        return new TerritoryPy();
    }
}
