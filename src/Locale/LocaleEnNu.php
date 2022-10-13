<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNu;

/**
 * Class LocaleEnNu
 */
class LocaleEnNu extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNu();
    }
}
