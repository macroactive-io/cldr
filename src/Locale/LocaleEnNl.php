<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNl;

/**
 * Class LocaleEnNl - English
 */
class LocaleEnNl extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNl();
    }
}
