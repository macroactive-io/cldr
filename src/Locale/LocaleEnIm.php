<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIm;

/**
 * Class LocaleEnIm
 */
class LocaleEnIm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryIm();
    }
}
