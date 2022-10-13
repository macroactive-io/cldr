<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVi;

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
