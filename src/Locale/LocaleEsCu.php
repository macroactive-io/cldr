<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCu;

/**
 * @psalm-immutable
 */
class LocaleEsCu extends LocaleEs
{
    public function territory(): TerritoryCu
    {
        return new TerritoryCu();
    }
}
