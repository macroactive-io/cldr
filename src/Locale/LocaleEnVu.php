<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVu;

/**
 * Class LocaleEnVu
 */
class LocaleEnVu extends LocaleEn
{
    public function territory()
    {
        return new TerritoryVu();
    }
}
