<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEg;

/**
 * Class LocaleArEg
 * @psalm-immutable
 */
class LocaleArEg extends LocaleAr
{
    public function territory(): TerritoryEg
    {
        return new TerritoryEg();
    }
}
