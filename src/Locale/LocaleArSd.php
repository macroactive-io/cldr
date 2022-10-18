<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySd;

/**
 * Class LocaleArSd
 * @psalm-immutable
 */
class LocaleArSd extends LocaleAr
{
    public function territory(): TerritorySd
    {
        return new TerritorySd();
    }
}
