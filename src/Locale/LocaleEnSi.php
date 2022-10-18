<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySi;

/**
 * English
 *
 * @psalm-immutable
 */
class LocaleEnSi extends LocaleEn
{
    public function territory(): TerritorySi
    {
        return new TerritorySi();
    }
}
