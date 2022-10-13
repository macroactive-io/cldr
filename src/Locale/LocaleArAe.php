<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAe;

/**
 * Class LocaleArAe
 */
class LocaleArAe extends LocaleAr
{
    public function territory()
    {
        return new TerritoryAe();
    }
}
