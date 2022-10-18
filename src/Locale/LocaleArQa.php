<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryQa;

/**
 * Class LocaleArQa
 * @psalm-immutable
 */
class LocaleArQa extends LocaleAr
{
    public function territory(): TerritoryQa
    {
        return new TerritoryQa();
    }
}
