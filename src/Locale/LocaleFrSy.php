<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySy;

/**
 * Class LocaleFrSy
 * @psalm-immutable
 */
class LocaleFrSy extends LocaleFr
{
    public function territory(): TerritorySy
    {
        return new TerritorySy();
    }
}
