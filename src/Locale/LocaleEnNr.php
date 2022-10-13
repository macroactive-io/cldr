<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNr;

/**
 * Class LocaleEnNr
 */
class LocaleEnNr extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNr();
    }
}
