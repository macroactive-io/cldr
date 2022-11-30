<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Class LocaleFfAdlmCm - Fulah
 *
 * @psalm-immutable
 */
class LocaleFfAdlmCm extends LocaleFfAdlm
{
    public function territory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
