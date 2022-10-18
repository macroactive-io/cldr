<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTl;

/**
 * @psalm-immutable
 */
class LocalePtTl extends LocalePt
{
    public function territory(): TerritoryTl
    {
        return new TerritoryTl();
    }
}
