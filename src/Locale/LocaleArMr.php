<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMr;

/**
 * Class LocaleArMr
 * @psalm-immutable
 */
class LocaleArMr extends LocaleAr
{
    public function territory(): TerritoryMr
    {
        return new TerritoryMr();
    }
}
