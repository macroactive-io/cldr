<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGd;

/**
 * Class LocaleEnGd
 * @psalm-immutable
 */
class LocaleEnGd extends LocaleEn
{
    public function territory(): TerritoryGd
    {
        return new TerritoryGd();
    }
}
