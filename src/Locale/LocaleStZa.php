<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryZa;

/**
 * Class LocaleStZa
 * @psalm-immutable
 */
class LocaleStZa extends LocaleSt
{
    public function territory(): TerritoryZa
    {
        return new TerritoryZa();
    }
}
