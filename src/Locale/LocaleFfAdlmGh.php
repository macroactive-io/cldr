<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGh;

/**
 * Class LocaleFfAdlmGh - Fulah
 *
* @psalm-immutable
 */
class LocaleFfAdlmGh extends LocaleFfAdlm
{
    public function territory(): TerritoryGh 
    {
        return new TerritoryGh();
    }
}
