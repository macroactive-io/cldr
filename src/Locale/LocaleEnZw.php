<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryZw;

/**
 * @psalm-immutable
 */
class LocaleEnZw extends LocaleEn
{
    public function territory(): TerritoryZw
    {
        return new TerritoryZw();
    }
}
