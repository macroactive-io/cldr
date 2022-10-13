<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEc;

/**
 * Class LocaleQuEc
 * @psalm-immutable
 */
class LocaleQuEc extends LocaleQu
{
    public function territory(): TerritoryEc
    {
        return new TerritoryEc();
    }
}
