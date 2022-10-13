<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAs;

/**
 * Class LocaleEnAs
 */
class LocaleEnAs extends LocaleEn
{
    public function territory()
    {
        return new TerritoryAs();
    }
}
