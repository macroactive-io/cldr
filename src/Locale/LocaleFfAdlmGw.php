<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGw;

/**
 * Class LocaleFfAdlmGw - Fulah
 *
* @psalm-immutable
 */
class LocaleFfAdlmGw extends LocaleFfAdlm
{
    public function territory(): TerritoryGw 
    {
        return new TerritoryGw();
    }
}
