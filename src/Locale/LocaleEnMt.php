<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMt;

/**
 * Class LocaleEnMt
 */
class LocaleEnMt extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMt();
    }
}
