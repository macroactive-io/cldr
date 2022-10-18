<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCw;

/**
 * Class LocaleNlCw
 * @psalm-immutable
 */
class LocaleNlCw extends LocaleNl
{
    public function territory(): TerritoryCw
    {
        return new TerritoryCw();
    }
}
