<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAr;

/**
 * Class LocaleEsAr
 * @psalm-immutable
 */
class LocaleEsAr extends LocaleEs
{
    public function territory(): TerritoryAr
    {
        return new TerritoryAr();
    }
}
