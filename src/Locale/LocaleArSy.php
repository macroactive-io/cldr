<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySy;

/**
 * @psalm-immutable
 */
class LocaleArSy extends LocaleAr
{
    public function territory(): TerritorySy
    {
        return new TerritorySy();
    }
}
