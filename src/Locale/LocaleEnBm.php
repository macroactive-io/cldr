<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBm;

/**
 * Class LocaleEnBm
 */
class LocaleEnBm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryBm();
    }
}
