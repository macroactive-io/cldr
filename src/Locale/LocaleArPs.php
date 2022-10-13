<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPs;

/**
 * Class LocaleArPs
 */
class LocaleArPs extends LocaleAr
{
    public function territory()
    {
        return new TerritoryPs();
    }
}
