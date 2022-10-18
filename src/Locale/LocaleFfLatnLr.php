<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLr;

/**
 * Fulah
 *
 * @psalm-immutable
 */
class LocaleFfLatnLr extends LocaleFfLatn
{
    public function territory(): TerritoryLr
    {
        return new TerritoryLr();
    }
}
