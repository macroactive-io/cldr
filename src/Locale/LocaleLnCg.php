<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCg;

/**
 * Class LocaleLnCg
 * @psalm-immutable
 */
class LocaleLnCg extends LocaleLn
{
    public function territory(): TerritoryCg
    {
        return new TerritoryCg();
    }
}
