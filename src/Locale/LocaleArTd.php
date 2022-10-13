<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTd;

/**
 * Class LocaleArTd
 */
class LocaleArTd extends LocaleAr
{
    public function territory()
    {
        return new TerritoryTd();
    }
}
