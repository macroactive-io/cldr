<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBb;

/**
 * Class LocaleEnBb
 */
class LocaleEnBb extends LocaleEn
{
    public function territory()
    {
        return new TerritoryBb();
    }
}
