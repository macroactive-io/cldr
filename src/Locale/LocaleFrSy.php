<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySy;

/**
 * @psalm-immutable
 */
class LocaleFrSy extends LocaleFr
{
    public function territory(): TerritorySy
    {
        return new TerritorySy();
    }
}
