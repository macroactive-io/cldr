<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySh;

/**
 * @psalm-immutable
 */
class LocaleEnSh extends LocaleEn
{
    public function territory(): TerritorySh
    {
        return new TerritorySh();
    }
}
