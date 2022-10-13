<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryOm;

/**
 * Class LocaleArOm
 * @psalm-immutable
 */
class LocaleArOm extends LocaleAr
{
    public function territory(): TerritoryOm
    {
        return new TerritoryOm();
    }
}
