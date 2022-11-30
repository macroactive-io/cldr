<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGb;

/**
 * Class LocaleGaGb
 *
* @psalm-immutable
 */
class LocaleGaGb extends LocaleGa
{
    public function territory(): TerritoryGb 
    {
        return new TerritoryGb();
    }
}
