<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVi;

/**
 * Class LocaleEnVi
 */
class LocaleEnVi extends LocaleEn
{
    public function territory()
    {
        return new TerritoryVi();
    }
}
