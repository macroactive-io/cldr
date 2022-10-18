<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGm;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnGm extends LocaleFfLatn
{
    public function territory(): TerritoryGm
    {
        return new TerritoryGm();
    }
}
