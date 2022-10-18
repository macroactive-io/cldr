<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySs;

/**
 * @psalm-immutable
 */
class LocaleArSs extends LocaleAr
{
    public function territory(): TerritorySs
    {
        return new TerritorySs();
    }
}
