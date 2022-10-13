<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUy;

/**
 * Class LocaleEsUy
 */
class LocaleEsUy extends LocaleEs
{
    public function territory()
    {
        return new TerritoryUy();
    }
}
