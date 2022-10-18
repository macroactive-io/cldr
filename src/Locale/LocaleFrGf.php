<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGf;

/**
 * @psalm-immutable
 */
class LocaleFrGf extends LocaleFr
{
    public function territory(): TerritoryGf
    {
        return new TerritoryGf();
    }
}
