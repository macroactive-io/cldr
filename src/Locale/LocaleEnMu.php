<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMu;

/**
 * Class LocaleEnMu
 */
class LocaleEnMu extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMu();
    }
}
