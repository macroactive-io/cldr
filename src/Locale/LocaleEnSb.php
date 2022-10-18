<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySb;

/**
 * Class LocaleEnSb
 * @psalm-immutable
 */
class LocaleEnSb extends LocaleEn
{
    public function territory(): TerritorySb
    {
        return new TerritorySb();
    }
}
