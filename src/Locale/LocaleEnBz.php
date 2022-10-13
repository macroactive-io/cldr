<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBz;

/**
 * Class LocaleEnBz
 */
class LocaleEnBz extends LocaleEn
{
    public function territory()
    {
        return new TerritoryBz();
    }
}
