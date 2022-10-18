<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCo;

/**
 * @psalm-immutable
 */
class LocaleEsCo extends LocaleEs
{
    public function territory(): TerritoryCo
    {
        return new TerritoryCo();
    }
}
