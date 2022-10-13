<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LocaleEnEr
 */
class LocaleEnEr extends LocaleEn
{
    public function territory()
    {
        return new TerritoryEr();
    }
}
