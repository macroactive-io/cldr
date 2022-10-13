<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryJe;

/**
 * Class LocaleEnJe
 */
class LocaleEnJe extends LocaleEn
{
    public function territory()
    {
        return new TerritoryJe();
    }
}
