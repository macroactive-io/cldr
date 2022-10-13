<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTt;

/**
 * Class LocaleEnTt
 */
class LocaleEnTt extends LocaleEn
{
    public function territory()
    {
        return new TerritoryTt();
    }
}
