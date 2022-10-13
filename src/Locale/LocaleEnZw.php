<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZw;

/**
 * Class LocaleEnZw
 * @psalm-immutable
 */
class LocaleEnZw extends LocaleEn
{
    public function territory(): TerritoryZw
    {
        return new TerritoryZw();
    }
}
