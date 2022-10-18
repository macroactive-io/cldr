<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKy;

/**
 * @psalm-immutable
 */
class LocaleEnKy extends LocaleEn
{
    public function territory(): TerritoryKy
    {
        return new TerritoryKy();
    }
}
