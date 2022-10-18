<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryVc;

/**
 * Class LocaleEnVc
 * @psalm-immutable
 */
class LocaleEnVc extends LocaleEn
{
    public function territory(): TerritoryVc
    {
        return new TerritoryVc();
    }
}
