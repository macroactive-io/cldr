<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPf;

/**
 * @psalm-immutable
 */
class LocaleFrPf extends LocaleFr
{
    public function territory(): TerritoryPf
    {
        return new TerritoryPf();
    }
}
