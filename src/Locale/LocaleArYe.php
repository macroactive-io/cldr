<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryYe;

/**
 * Class LocaleArYe
 */
class LocaleArYe extends LocaleAr
{
    public function territory()
    {
        return new TerritoryYe();
    }
}
