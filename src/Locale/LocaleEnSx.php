<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySx;

/**
 * @psalm-immutable
 */
class LocaleEnSx extends LocaleEn
{
    public function territory(): TerritorySx
    {
        return new TerritorySx();
    }
}
