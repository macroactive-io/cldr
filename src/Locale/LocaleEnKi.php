<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKi;

/**
 * Class LocaleEnKi
 */
class LocaleEnKi extends LocaleEn
{
    public function territory()
    {
        return new TerritoryKi();
    }
}
