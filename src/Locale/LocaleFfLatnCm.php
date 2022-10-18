<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Fulah
 *
 * @psalm-immutable
 */
class LocaleFfLatnCm extends LocaleFfLatn
{
    public function territory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
