<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryQa;

/**
 * Class LocaleArQa
 * @psalm-immutable
 */
class LocaleArQa extends LocaleAr
{
    public function territory(): TerritoryQa
    {
        return new TerritoryQa();
    }
}
