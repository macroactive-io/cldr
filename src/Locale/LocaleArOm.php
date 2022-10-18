<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryOm;

/**
 * @psalm-immutable
 */
class LocaleArOm extends LocaleAr
{
    public function territory(): TerritoryOm
    {
        return new TerritoryOm();
    }
}
