<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNa;

/**
 * Class LocaleEnNa
 */
class LocaleEnNa extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNa();
    }
}
