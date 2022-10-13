<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKn;

/**
 * Class LocaleEnKn
 */
class LocaleEnKn extends LocaleEn
{
    public function territory()
    {
        return new TerritoryKn();
    }
}
