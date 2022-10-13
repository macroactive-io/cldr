<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNi;

/**
 * Class LocaleEsNi
 */
class LocaleEsNi extends LocaleEs
{
    public function territory()
    {
        return new TerritoryNi();
    }
}
