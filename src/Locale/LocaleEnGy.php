<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGy;

/**
 * Class LocaleEnGy
 * @psalm-immutable
 */
class LocaleEnGy extends LocaleEn
{
    public function territory(): TerritoryGy
    {
        return new TerritoryGy();
    }
}
