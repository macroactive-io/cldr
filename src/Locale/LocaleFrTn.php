<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTn;

/**
 * @psalm-immutable
 */
class LocaleFrTn extends LocaleFr
{
    public function territory(): TerritoryTn
    {
        return new TerritoryTn();
    }
}
