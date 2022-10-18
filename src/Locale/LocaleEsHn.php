<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryHn;

/**
 * @psalm-immutable
 */
class LocaleEsHn extends LocaleEs
{
    public function territory(): TerritoryHn
    {
        return new TerritoryHn();
    }
}
