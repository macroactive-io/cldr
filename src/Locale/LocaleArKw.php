<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKw;

/**
 * Class LocaleArKw
 */
class LocaleArKw extends LocaleAr
{
    public function territory()
    {
        return new TerritoryKw();
    }
}
