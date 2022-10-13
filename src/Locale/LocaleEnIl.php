<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIl;

/**
 * Class LocaleEnIl
 */
class LocaleEnIl extends LocaleEn
{
    public function territory()
    {
        return new TerritoryIl();
    }
}
