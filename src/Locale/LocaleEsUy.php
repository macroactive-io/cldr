<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryUy;

/**
 * @psalm-immutable
 */
class LocaleEsUy extends LocaleEs
{
    public function territory(): TerritoryUy
    {
        return new TerritoryUy();
    }
}
