<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCy;

/**
 * @psalm-immutable
 */
class LocaleEnCy extends LocaleEn
{
    public function territory(): TerritoryCy
    {
        return new TerritoryCy();
    }
}
