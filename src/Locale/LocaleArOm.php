<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryOm;

/**
 * Class LocaleArOm
 */
class LocaleArOm extends LocaleAr
{
    public function territory()
    {
        return new TerritoryOm();
    }
}
