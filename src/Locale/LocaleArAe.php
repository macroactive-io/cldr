<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAe;

/**
 * Class LocaleArAe
 * @psalm-immutable
 */
class LocaleArAe extends LocaleAr
{
    public function territory(): TerritoryAe
    {
        return new TerritoryAe();
    }
}
