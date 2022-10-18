<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGp;

/**
 * @psalm-immutable
 */
class LocaleFrGp extends LocaleFr
{
    public function territory(): TerritoryGp
    {
        return new TerritoryGp();
    }
}
