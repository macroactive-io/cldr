<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCc;

/**
 * Class LocaleEnCc
 * @psalm-immutable
 */
class LocaleEnCc extends LocaleEn
{
    public function territory(): TerritoryCc
    {
        return new TerritoryCc();
    }
}
