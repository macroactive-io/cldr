<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBz;

/**
 * @psalm-immutable
 */
class LocaleEnBz extends LocaleEn
{
    public function territory(): TerritoryBz
    {
        return new TerritoryBz();
    }
}
