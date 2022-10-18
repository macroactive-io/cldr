<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySs;

/**
 * Class LocaleEnSs
 * @psalm-immutable
 */
class LocaleEnSs extends LocaleEn
{
    public function territory(): TerritorySs
    {
        return new TerritorySs();
    }
}
