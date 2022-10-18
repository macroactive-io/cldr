<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAe;

/**
 * Class LocaleArAe
 * @psalm-immutable
 */
class LocaleArAe extends LocaleAr
{
    public function territory(): TerritoryAe
    {
        return new TerritoryAe();
    }
}
