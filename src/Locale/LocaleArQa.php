<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryQa;

/**
 * Class LocaleArQa
 */
class LocaleArQa extends LocaleAr
{
    public function territory()
    {
        return new TerritoryQa();
    }
}
