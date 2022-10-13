<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LocaleArIq
 */
class LocaleArIq extends LocaleAr
{
    public function territory()
    {
        return new TerritoryIq();
    }
}
