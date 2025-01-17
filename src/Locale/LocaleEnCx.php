<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCx;

/**
 * @psalm-immutable
 */
class LocaleEnCx extends LocaleEn
{
    public function territory(): TerritoryCx
    {
        return new TerritoryCx();
    }
}
