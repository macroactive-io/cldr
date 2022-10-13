<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLs;

/**
 * Class LocaleEnLs
 */
class LocaleEnLs extends LocaleEn
{
    public function territory()
    {
        return new TerritoryLs();
    }
}
