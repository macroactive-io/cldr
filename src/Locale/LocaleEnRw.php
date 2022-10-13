<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryRw;

/**
 * Class LocaleEnRw
 */
class LocaleEnRw extends LocaleEn
{
    public function territory()
    {
        return new TerritoryRw();
    }
}
