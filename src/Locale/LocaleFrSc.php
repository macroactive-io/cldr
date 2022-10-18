<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySc;

/**
 * @psalm-immutable
 */
class LocaleFrSc extends LocaleFr
{
    public function territory(): TerritorySc
    {
        return new TerritorySc();
    }
}
