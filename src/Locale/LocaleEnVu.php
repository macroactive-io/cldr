<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryVu;

/**
 * Class LocaleEnVu
 * @psalm-immutable
 */
class LocaleEnVu extends LocaleEn
{
    public function territory(): TerritoryVu
    {
        return new TerritoryVu();
    }
}
