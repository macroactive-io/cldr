<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGm;

/**
 * Class LocaleFfAdlmGm - Fulah
 *
* @psalm-immutable
 */
class LocaleFfAdlmGm extends LocaleFfAdlm
{
    public function territory(): TerritoryGm 
    {
        return new TerritoryGm();
    }
}
