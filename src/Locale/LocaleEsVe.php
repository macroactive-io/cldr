<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVe;

/**
 * Class LocaleEsVe
 */
class LocaleEsVe extends LocaleEs
{
    public function territory()
    {
        return new TerritoryVe();
    }
}
