<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGm;

/**
 * Class LocaleEnGm
 */
class LocaleEnGm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGm();
    }
}
