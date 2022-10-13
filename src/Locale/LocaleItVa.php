<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVa;

/**
 * Class LocaleItVa
 */
class LocaleItVa extends LocaleIt
{
    public function territory()
    {
        return new TerritoryVa();
    }
}
