<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKg;

/**
 * Class LocaleRuKg
 */
class LocaleRuKg extends LocaleRu
{
    public function territory()
    {
        return new TerritoryKg();
    }
}
