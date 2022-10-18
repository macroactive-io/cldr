<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMe;

/**
 * @psalm-immutable
 */
class LocaleSrCyrlMe extends LocaleSrCyrl
{
    public function territory(): TerritoryMe
    {
        return new TerritoryMe();
    }
}
