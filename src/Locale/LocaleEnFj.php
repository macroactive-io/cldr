<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFj;

/**
 * Class LocaleEnFj
 */
class LocaleEnFj extends LocaleEn
{
    public function territory()
    {
        return new TerritoryFj();
    }
}
