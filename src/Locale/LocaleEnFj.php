<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryFj;

/**
 * @psalm-immutable
 */
class LocaleEnFj extends LocaleEn
{
    public function territory(): TerritoryFj
    {
        return new TerritoryFj();
    }
}
