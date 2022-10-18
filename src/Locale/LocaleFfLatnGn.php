<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGn;

/**
 * Fulah
 *
 * @psalm-immutable
 */
class LocaleFfLatnGn extends LocaleFfLatn
{
    public function territory(): TerritoryGn
    {
        return new TerritoryGn();
    }
}
