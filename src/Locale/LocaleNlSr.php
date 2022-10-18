<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySr;

/**
 * Class LocaleNlSr
 * @psalm-immutable
 */
class LocaleNlSr extends LocaleNl
{
    public function territory(): TerritorySr
    {
        return new TerritorySr();
    }
}
