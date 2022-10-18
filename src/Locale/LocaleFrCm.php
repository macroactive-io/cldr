<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * @psalm-immutable
 */
class LocaleFrCm extends LocaleFr
{
    public function territory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
