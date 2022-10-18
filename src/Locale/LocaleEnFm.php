<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryFm;

/**
 * Class LocaleEnFm
 * @psalm-immutable
 */
class LocaleEnFm extends LocaleEn
{
    public function territory(): TerritoryFm
    {
        return new TerritoryFm();
    }
}
