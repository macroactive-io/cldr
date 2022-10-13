<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFm;

/**
 * Class LocaleEnFm
 */
class LocaleEnFm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryFm();
    }
}
