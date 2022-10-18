<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryYt;

/**
 * @psalm-immutable
 */
class LocaleFrYt extends LocaleFr
{
    public function territory(): TerritoryYt
    {
        return new TerritoryYt();
    }
}
