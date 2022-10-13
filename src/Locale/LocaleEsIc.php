<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIc;

/**
 * Class LocaleEsIc
 */
class LocaleEsIc extends LocaleEs
{
    public function territory()
    {
        return new TerritoryIc();
    }
}
