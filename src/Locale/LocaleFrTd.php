<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTd;

/**
 * Class LocaleFrTd
 * @psalm-immutable
 */
class LocaleFrTd extends LocaleFr
{
    public function territory(): TerritoryTd
    {
        return new TerritoryTd();
    }
}
