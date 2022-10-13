<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LocaleArEr
 */
class LocaleArEr extends LocaleAr
{
    public function territory()
    {
        return new TerritoryEr();
    }
}
