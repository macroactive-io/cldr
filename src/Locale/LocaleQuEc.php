<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEc;

/**
 * Class LocaleQuEc
 */
class LocaleQuEc extends LocaleQu
{
    public function territory()
    {
        return new TerritoryEc();
    }
}
