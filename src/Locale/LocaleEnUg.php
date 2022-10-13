<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUg;

/**
 * Class LocaleEnUg
 */
class LocaleEnUg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryUg();
    }
}
