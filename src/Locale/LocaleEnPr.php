<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPr;

/**
 * Class LocaleEnPr
 */
class LocaleEnPr extends LocaleEn
{
    public function territory()
    {
        return new TerritoryPr();
    }
}
