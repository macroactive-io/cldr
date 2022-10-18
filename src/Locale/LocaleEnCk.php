<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCk;

/**
 * @psalm-immutable
 */
class LocaleEnCk extends LocaleEn
{
    public function territory(): TerritoryCk
    {
        return new TerritoryCk();
    }
}
