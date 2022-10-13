<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGu;

/**
 * Class LocaleEnGu
 */
class LocaleEnGu extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGu();
    }
}
