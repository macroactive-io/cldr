<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGy;

/**
 * Class LocaleEnGy
 */
class LocaleEnGy extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGy();
    }
}
