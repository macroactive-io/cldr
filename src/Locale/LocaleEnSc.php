<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySc;

/**
 * @psalm-immutable
 */
class LocaleEnSc extends LocaleEn
{
    public function territory(): TerritorySc
    {
        return new TerritorySc();
    }
}
