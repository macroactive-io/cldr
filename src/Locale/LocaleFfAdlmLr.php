<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLr;

/**
 * Class LocaleFfAdlmLr - Fulah
 *
* @psalm-immutable
 */
class LocaleFfAdlmLr extends LocaleFfAdlm
{
    public function territory(): TerritoryLr 
    {
        return new TerritoryLr();
    }
}
