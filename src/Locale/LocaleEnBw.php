<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBw;

/**
 * Class LocaleEnBw
 */
class LocaleEnBw extends LocaleEn
{
    public function territory()
    {
        return new TerritoryBw();
    }
}
