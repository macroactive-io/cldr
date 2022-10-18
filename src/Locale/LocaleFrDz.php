<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryDz;

/**
 * @psalm-immutable
 */
class LocaleFrDz extends LocaleFr
{
    public function territory(): TerritoryDz
    {
        return new TerritoryDz();
    }
}
