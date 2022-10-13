<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIe;

/**
 * Class LocaleEnIe
 */
class LocaleEnIe extends LocaleEn
{
    public function territory()
    {
        return new TerritoryIe();
    }
}
