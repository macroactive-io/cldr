<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVg;

/**
 * Class LocaleEnVg
 * @psalm-immutable
 */
class LocaleEnVg extends LocaleEn
{
    public function territory(): TerritoryVg
    {
        return new TerritoryVg();
    }
}
