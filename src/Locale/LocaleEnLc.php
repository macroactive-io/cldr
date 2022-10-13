<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLc;

/**
 * Class LocaleEnLc
 */
class LocaleEnLc extends LocaleEn
{
    public function territory()
    {
        return new TerritoryLc();
    }
}
