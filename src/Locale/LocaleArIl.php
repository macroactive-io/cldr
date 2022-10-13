<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIl;

/**
 * Class LocaleArIl
 * @psalm-immutable
 */
class LocaleArIl extends LocaleAr
{
    public function territory(): TerritoryIl
    {
        return new TerritoryIl();
    }
}
