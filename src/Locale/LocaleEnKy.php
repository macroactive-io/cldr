<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKy;

/**
 * Class LocaleEnKy
 */
class LocaleEnKy extends LocaleEn
{
    public function territory()
    {
        return new TerritoryKy();
    }
}
