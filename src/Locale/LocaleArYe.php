<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryYe;

/**
 * @psalm-immutable
 */
class LocaleArYe extends LocaleAr
{
    public function territory(): TerritoryYe
    {
        return new TerritoryYe();
    }
}
