<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMw;

/**
 * Class LocaleEnMw
 */
class LocaleEnMw extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMw();
    }
}
