<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPn;

/**
 * Class LocaleEnPn
 */
class LocaleEnPn extends LocaleEn
{
    public function territory()
    {
        return new TerritoryPn();
    }
}
