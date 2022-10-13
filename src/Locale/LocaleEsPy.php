<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPy;

/**
 * Class LocaleEsPy
 */
class LocaleEsPy extends LocaleEs
{
    public function territory()
    {
        return new TerritoryPy();
    }
}
