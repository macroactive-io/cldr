<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySz;

/**
 * @psalm-immutable
 */
class LocaleEnSz extends LocaleEn
{
    public function territory(): TerritorySz
    {
        return new TerritorySz();
    }
}
