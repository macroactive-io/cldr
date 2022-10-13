<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMs;

/**
 * Class LocaleEnMs
 */
class LocaleEnMs extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMs();
    }
}
