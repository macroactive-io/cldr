<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBf;

/**
 * Fulah
 *
 * @psalm-immutable
 */
class LocaleFfLatnBf extends LocaleFfLatn
{
    public function territory(): TerritoryBf
    {
        return new TerritoryBf();
    }
}
