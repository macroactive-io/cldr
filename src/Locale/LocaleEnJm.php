<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryJm;

/**
 * Class LocaleEnJm
 */
class LocaleEnJm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryJm();
    }
}
