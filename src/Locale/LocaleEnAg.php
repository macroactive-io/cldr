<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAg;

/**
 * @psalm-immutable
 */
class LocaleEnAg extends LocaleEn
{
    public function territory(): TerritoryAg
    {
        return new TerritoryAg();
    }
}
