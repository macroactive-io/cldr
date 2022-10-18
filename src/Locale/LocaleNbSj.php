<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySj;

/**
 * Class LocaleNbSj
 * @psalm-immutable
 */
class LocaleNbSj extends LocaleNb
{
    public function territory(): TerritorySj
    {
        return new TerritorySj();
    }
}
