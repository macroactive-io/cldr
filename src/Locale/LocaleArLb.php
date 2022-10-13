<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLb;

/**
 * Class LocaleArLb
 */
class LocaleArLb extends LocaleAr
{
    public function territory()
    {
        return new TerritoryLb();
    }
}
