<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNg;

/**
 * Class LocaleFfAdlmNg - Fulah
 *
* @psalm-immutable
 */
class LocaleFfAdlmNg extends LocaleFfAdlm
{
    public function territory(): TerritoryNg 
    {
        return new TerritoryNg();
    }
}
