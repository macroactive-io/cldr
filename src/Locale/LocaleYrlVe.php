<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryVe;

/**
 * Class LocaleYrlVe - Nheengatu
 *
* @psalm-immutable
 */
class LocaleYrlVe extends LocaleYrl
{
    public function territory(): TerritoryVe 
    {
        return new TerritoryVe();
    }
}
