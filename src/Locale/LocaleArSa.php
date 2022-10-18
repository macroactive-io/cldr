<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySa;

/**
 * Class LocaleArSa
 * @psalm-immutable
 */
class LocaleArSa extends LocaleAr
{
    public function territory(): TerritorySa
    {
        return new TerritorySa();
    }
}
