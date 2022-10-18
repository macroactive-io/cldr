<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySl;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnSl extends LocaleFfLatn
{
    public function territory(): TerritorySl
    {
        return new TerritorySl();
    }
}
