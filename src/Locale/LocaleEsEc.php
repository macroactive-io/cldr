<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEc;

/**
 * Class LocaleEsEc
 */
class LocaleEsEc extends LocaleEs
{
    public function territory()
    {
        return new TerritoryEc();
    }
}
