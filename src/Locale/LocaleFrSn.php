<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySn;

/**
 * Class LocaleFrSn
 * @psalm-immutable
 */
class LocaleFrSn extends LocaleFr
{
    public function territory(): TerritorySn
    {
        return new TerritorySn();
    }
}
