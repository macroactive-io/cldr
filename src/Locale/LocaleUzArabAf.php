<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAf;

/**
 * Class LocaleUzArabAf
 */
class LocaleUzArabAf extends LocaleUzArab
{
    public function territory()
    {
        return new TerritoryAf();
    }
}
