<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMr;

/**
 * Class LocaleArMr
 */
class LocaleArMr extends LocaleAr
{
    public function territory()
    {
        return new TerritoryMr();
    }
}
