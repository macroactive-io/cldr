<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySd;

/**
 * @psalm-immutable
 */
class LocaleEnSd extends LocaleEn
{
    public function territory(): TerritorySd
    {
        return new TerritorySd();
    }
}
