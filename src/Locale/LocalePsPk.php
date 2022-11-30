<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPk;

/**
 * Class LocalePsPk
 *
* @psalm-immutable
 */
class LocalePsPk extends LocalePs
{
    public function territory(): TerritoryPk 
    {
        return new TerritoryPk();
    }
}
