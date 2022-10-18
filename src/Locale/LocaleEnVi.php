<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryVi;

/**
 * Class LocaleEnVi
 * @psalm-immutable
 */
class LocaleEnVi extends LocaleEn
{
    public function territory(): TerritoryVi
    {
        return new TerritoryVi();
    }
}
