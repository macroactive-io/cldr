<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMd;

/**
 * Class LocaleRuMd
 */
class LocaleRuMd extends LocaleRu
{
    public function territory()
    {
        return new TerritoryMd();
    }
}
