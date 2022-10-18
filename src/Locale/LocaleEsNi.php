<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNi;

/**
 * @psalm-immutable
 */
class LocaleEsNi extends LocaleEs
{
    public function territory(): TerritoryNi
    {
        return new TerritoryNi();
    }
}
