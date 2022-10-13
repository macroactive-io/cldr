<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTo;

/**
 * Class LocaleEnTo
 */
class LocaleEnTo extends LocaleEn
{
    public function territory()
    {
        return new TerritoryTo();
    }
}
