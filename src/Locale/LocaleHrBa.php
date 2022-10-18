<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBa;

/**
 * @psalm-immutable
 */
class LocaleHrBa extends LocaleHr
{
    public function territory(): TerritoryBa
    {
        return new TerritoryBa();
    }
}
