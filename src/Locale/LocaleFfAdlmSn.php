<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySn;

/**
 * Class LocaleFfAdlmSn - Fulah
 *
* @psalm-immutable
 */
class LocaleFfAdlmSn extends LocaleFfAdlm
{
    public function territory(): TerritorySn 
    {
        return new TerritorySn();
    }
}