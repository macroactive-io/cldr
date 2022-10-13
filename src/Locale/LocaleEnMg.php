<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMg;

/**
 * Class LocaleEnMg
 * @psalm-immutable
 */
class LocaleEnMg extends LocaleEn
{
    public function territory(): TerritoryMg
    {
        return new TerritoryMg();
    }
}
