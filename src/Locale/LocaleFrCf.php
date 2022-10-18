<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCf;

/**
 * @psalm-immutable
 */
class LocaleFrCf extends LocaleFr
{
    public function territory(): TerritoryCf
    {
        return new TerritoryCf();
    }
}
