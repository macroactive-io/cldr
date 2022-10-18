<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySv;

/**
 * @psalm-immutable
 */
class LocaleEsSv extends LocaleEs
{
    public function territory(): TerritorySv
    {
        return new TerritorySv();
    }
}
