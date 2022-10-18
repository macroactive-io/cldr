<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySx;

/**
 * @psalm-immutable
 */
class LocaleNlSx extends LocaleNl
{
    public function territory(): TerritorySx
    {
        return new TerritorySx();
    }
}
