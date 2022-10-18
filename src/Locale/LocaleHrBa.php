<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBa;

/**
 * Class LocaleHrBa
 * @psalm-immutable
 */
class LocaleHrBa extends LocaleHr
{
    public function territory(): TerritoryBa
    {
        return new TerritoryBa();
    }
}
