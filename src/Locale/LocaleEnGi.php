<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGi;

/**
 * Class LocaleEnGi
 */
class LocaleEnGi extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGi();
    }
}
