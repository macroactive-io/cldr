<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LocaleAaEr
 */
class LocaleAaEr extends LocaleAa
{
    public function territory()
    {
        return new TerritoryEr();
    }
}
