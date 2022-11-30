<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySl;

/**
 * Class LocaleFfAdlmSl - Fulah
 *
 * @psalm-immutable
 */
class LocaleFfAdlmSl extends LocaleFfAdlm
{
    public function territory(): TerritorySl
    {
        return new TerritorySl();
    }
}
