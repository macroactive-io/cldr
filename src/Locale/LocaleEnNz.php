<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNz;

/**
 * Class LocaleEnNz
 */
class LocaleEnNz extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNz();
    }
}
