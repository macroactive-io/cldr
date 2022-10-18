<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySo;

/**
 * @psalm-immutable
 */
class LocaleArSo extends LocaleAr
{
    public function territory(): TerritorySo
    {
        return new TerritorySo();
    }
}
