<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCf;

/**
 * Class LocaleLnCf
 * @psalm-immutable
 */
class LocaleLnCf extends LocaleLn
{
    public function territory(): TerritoryCf
    {
        return new TerritoryCf();
    }
}
