<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZw;

/**
 * Class LocaleEnZw
 */
class LocaleEnZw extends LocaleEn
{
    public function territory()
    {
        return new TerritoryZw();
    }
}
