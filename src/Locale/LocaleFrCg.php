<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCg;

/**
 * Class LocaleFrCg
 * @psalm-immutable
 */
class LocaleFrCg extends LocaleFr
{
    public function territory(): TerritoryCg
    {
        return new TerritoryCg();
    }
}
