<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCi;

/**
 * @psalm-immutable
 */
class LocaleFrCi extends LocaleFr
{
    public function territory(): TerritoryCi
    {
        return new TerritoryCi();
    }
}
