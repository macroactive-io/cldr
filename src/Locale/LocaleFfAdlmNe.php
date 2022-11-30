<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNe;

/**
 * Class LocaleFfAdlmNe - Fulah
 *
* @psalm-immutable
 */
class LocaleFfAdlmNe extends LocaleFfAdlm
{
    public function territory(): TerritoryNe 
    {
        return new TerritoryNe();
    }
}
