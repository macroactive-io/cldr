<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCd;

/**
 * Class LocaleFrCd
 * @psalm-immutable
 */
class LocaleFrCd extends LocaleFr
{
    public function territory(): TerritoryCd
    {
        return new TerritoryCd();
    }
}
