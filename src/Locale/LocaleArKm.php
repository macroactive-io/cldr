<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKm;

/**
 * Class LocaleArKm
 * @psalm-immutable
 */
class LocaleArKm extends LocaleAr
{
    public function territory(): TerritoryKm
    {
        return new TerritoryKm();
    }
}
