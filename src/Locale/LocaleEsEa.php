<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEa;

/**
 * Class LocaleEsEa
 */
class LocaleEsEa extends LocaleEs
{
    public function territory()
    {
        return new TerritoryEa();
    }
}
