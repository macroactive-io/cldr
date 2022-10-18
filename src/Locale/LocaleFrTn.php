<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTn;

/**
 * Class LocaleFrTn
 * @psalm-immutable
 */
class LocaleFrTn extends LocaleFr
{
    public function territory(): TerritoryTn
    {
        return new TerritoryTn();
    }
}
