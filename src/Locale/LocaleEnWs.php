<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryWs;

/**
 * Class LocaleEnWs
 */
class LocaleEnWs extends LocaleEn
{
    public function territory()
    {
        return new TerritoryWs();
    }
}
