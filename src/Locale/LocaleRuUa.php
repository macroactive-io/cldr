<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUa;

/**
 * Class LocaleRuUa
 */
class LocaleRuUa extends LocaleRu
{
    public function territory()
    {
        return new TerritoryUa();
    }
}
