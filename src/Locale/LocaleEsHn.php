<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHn;

/**
 * Class LocaleEsHn
 */
class LocaleEsHn extends LocaleEs
{
    public function territory()
    {
        return new TerritoryHn();
    }
}
