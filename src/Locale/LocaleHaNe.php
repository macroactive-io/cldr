<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LocaleHaNe
 */
class LocaleHaNe extends LocaleHa
{
    public function territory()
    {
        return new TerritoryNe();
    }
}
