<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBs;

/**
 * Class LocaleEnBs
 */
class LocaleEnBs extends LocaleEn
{
    public function territory()
    {
        return new TerritoryBs();
    }
}
