<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LocaleEnNg
 */
class LocaleEnNg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNg();
    }
}
