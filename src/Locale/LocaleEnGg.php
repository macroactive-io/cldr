<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGg;

/**
 * @psalm-immutable
 */
class LocaleEnGg extends LocaleEn
{
    public function territory(): TerritoryGg
    {
        return new TerritoryGg();
    }
}
