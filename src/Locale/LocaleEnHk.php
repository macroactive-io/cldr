<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHk;

/**
 * Class LocaleEnHk
 */
class LocaleEnHk extends LocaleEn
{
    public function territory()
    {
        return new TerritoryHk();
    }
}
