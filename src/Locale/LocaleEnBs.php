<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBs;

/**
 * @psalm-immutable
 */
class LocaleEnBs extends LocaleEn
{
    public function territory(): TerritoryBs
    {
        return new TerritoryBs();
    }
}
