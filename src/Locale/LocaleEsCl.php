<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCl;

/**
 * Class LocaleEsCl
 * @psalm-immutable
 */
class LocaleEsCl extends LocaleEs
{
    public function territory(): TerritoryCl
    {
        return new TerritoryCl();
    }
}
