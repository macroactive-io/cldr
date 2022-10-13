<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGg;

/**
 * Class LocaleEnGg
 */
class LocaleEnGg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGg();
    }
}
