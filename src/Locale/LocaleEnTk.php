<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTk;

/**
 * Class LocaleEnTk
 */
class LocaleEnTk extends LocaleEn
{
    public function territory()
    {
        return new TerritoryTk();
    }
}
