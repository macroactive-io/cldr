<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAg;

/**
 * Class LocaleEnAg
 */
class LocaleEnAg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryAg();
    }
}
