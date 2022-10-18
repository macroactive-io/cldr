<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySm;

/**
 * @psalm-immutable
 */
class LocaleItSm extends LocaleIt
{
    public function territory(): TerritorySm
    {
        return new TerritorySm();
    }
}
