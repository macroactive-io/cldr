<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGt;

/**
 * Class LocaleEsGt
 */
class LocaleEsGt extends LocaleEs
{
    public function territory()
    {
        return new TerritoryGt();
    }
}
