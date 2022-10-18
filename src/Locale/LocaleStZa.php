<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryZa;

/**
 * @psalm-immutable
 */
class LocaleStZa extends LocaleSt
{
    public function territory(): TerritoryZa
    {
        return new TerritoryZa();
    }
}
