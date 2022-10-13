<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKz;

/**
 * Class LocaleRuKz
 */
class LocaleRuKz extends LocaleRu
{
    public function territory()
    {
        return new TerritoryKz();
    }
}
