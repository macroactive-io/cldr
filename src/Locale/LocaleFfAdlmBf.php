<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBf;

/**
 * Class LocaleFfAdlmBf - Fulah
 *
* @psalm-immutable
 */
class LocaleFfAdlmBf extends LocaleFfAdlm
{
    public function territory(): TerritoryBf 
    {
        return new TerritoryBf();
    }
}
