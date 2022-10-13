<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKm;

/**
 * Class LocaleArKm
 */
class LocaleArKm extends LocaleAr
{
    public function territory()
    {
        return new TerritoryKm();
    }
}
