<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPg;

/**
 * Class LocaleEnPg
 */
class LocaleEnPg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryPg();
    }
}
