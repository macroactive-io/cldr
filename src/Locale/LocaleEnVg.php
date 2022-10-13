<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVg;

/**
 * Class LocaleEnVg
 */
class LocaleEnVg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryVg();
    }
}
