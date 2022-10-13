<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAr;

/**
 * Class LocaleEsAr
 */
class LocaleEsAr extends LocaleEs
{
    public function territory()
    {
        return new TerritoryAr();
    }
}
