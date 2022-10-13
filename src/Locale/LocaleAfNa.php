<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNa;

/**
 * Class LocaleAfNa
 */
class LocaleAfNa extends LocaleAf
{
    public function territory()
    {
        return new TerritoryNa();
    }
}
