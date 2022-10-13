<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEg;

/**
 * Class LocaleArEg
 */
class LocaleArEg extends LocaleAr
{
    public function territory()
    {
        return new TerritoryEg();
    }
}
