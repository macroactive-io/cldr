<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMy;

/**
 * Class LocaleEnMy
 * @psalm-immutable
 */
class LocaleEnMy extends LocaleEn
{
    public function territory(): TerritoryMy
    {
        return new TerritoryMy();
    }
}
