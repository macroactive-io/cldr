<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLr;

/**
 * Class LocaleEnLr
 */
class LocaleEnLr extends LocaleEn
{
    public function territory()
    {
        return new TerritoryLr();
    }
}
