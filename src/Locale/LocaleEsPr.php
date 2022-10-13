<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPr;

/**
 * Class LocaleEsPr
 */
class LocaleEsPr extends LocaleEs
{
    public function territory()
    {
        return new TerritoryPr();
    }
}
