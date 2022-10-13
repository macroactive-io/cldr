<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVc;

/**
 * Class LocaleEnVc
 */
class LocaleEnVc extends LocaleEn
{
    public function territory()
    {
        return new TerritoryVc();
    }
}
