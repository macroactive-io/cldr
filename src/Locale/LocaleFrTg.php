<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTg;

/**
 * Class LocaleFrTg
 * @psalm-immutable
 */
class LocaleFrTg extends LocaleFr
{
    public function territory(): TerritoryTg
    {
        return new TerritoryTg();
    }
}
