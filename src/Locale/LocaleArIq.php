<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LocaleArIq
 * @psalm-immutable
 */
class LocaleArIq extends LocaleAr
{
    public function territory(): TerritoryIq
    {
        return new TerritoryIq();
    }
}
