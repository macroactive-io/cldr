<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGn;

/**
 * Class LocaleFfAdlmGn - Fulah
 *
* @psalm-immutable
 */
class LocaleFfAdlmGn extends LocaleFfAdlm
{
    public function territory(): TerritoryGn 
    {
        return new TerritoryGn();
    }
}
