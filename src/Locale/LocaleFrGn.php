<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGn;

/**
 * @psalm-immutable
 */
class LocaleFrGn extends LocaleFr
{
    public function territory(): TerritoryGn
    {
        return new TerritoryGn();
    }
}
