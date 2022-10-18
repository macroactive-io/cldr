<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryHt;

/**
 * @psalm-immutable
 */
class LocaleFrHt extends LocaleFr
{
    public function territory(): TerritoryHt
    {
        return new TerritoryHt();
    }
}
