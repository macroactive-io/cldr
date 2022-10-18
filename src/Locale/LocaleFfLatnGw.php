<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGw;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnGw extends LocaleFfLatn
{
    public function territory(): TerritoryGw
    {
        return new TerritoryGw();
    }
}
