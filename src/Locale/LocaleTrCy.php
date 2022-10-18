<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCy;

/**
 * Class LocaleTrCy
 * @psalm-immutable
 */
class LocaleTrCy extends LocaleTr
{
    public function territory(): TerritoryCy
    {
        return new TerritoryCy();
    }
}
