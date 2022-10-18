<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLs;

/**
 * @psalm-immutable
 */
class LocaleEnLs extends LocaleEn
{
    public function territory(): TerritoryLs
    {
        return new TerritoryLs();
    }
}
