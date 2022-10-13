<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGd;

/**
 * Class LocaleEnGd
 */
class LocaleEnGd extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGd();
    }
}
