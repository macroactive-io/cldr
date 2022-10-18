<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPy;

/**
 * Class LocaleEsPy
 * @psalm-immutable
 */
class LocaleEsPy extends LocaleEs
{
    public function territory(): TerritoryPy
    {
        return new TerritoryPy();
    }
}
