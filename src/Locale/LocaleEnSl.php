<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySl;

/**
 * @psalm-immutable
 */
class LocaleEnSl extends LocaleEn
{
    public function territory(): TerritorySl
    {
        return new TerritorySl();
    }
}
