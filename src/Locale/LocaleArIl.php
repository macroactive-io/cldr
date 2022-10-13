<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIl;

/**
 * Class LocaleArIl
 */
class LocaleArIl extends LocaleAr
{
    public function territory()
    {
        return new TerritoryIl();
    }
}
