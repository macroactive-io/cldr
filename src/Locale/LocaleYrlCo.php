<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCo;

/**
 * Class LocaleYrlCo - Nheengatu
 * @psalm-immutable
 */
class LocaleYrlCo extends LocaleYrl
{
    public function territory(): TerritoryCo
    {
        return new TerritoryCo();
    }
}
