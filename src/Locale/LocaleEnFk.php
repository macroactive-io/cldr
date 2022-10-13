<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFk;

/**
 * Class LocaleEnFk
 */
class LocaleEnFk extends LocaleEn
{
    public function territory()
    {
        return new TerritoryFk();
    }
}
