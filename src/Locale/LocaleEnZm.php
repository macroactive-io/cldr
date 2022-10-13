<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZm;

/**
 * Class LocaleEnZm
 */
class LocaleEnZm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryZm();
    }
}
