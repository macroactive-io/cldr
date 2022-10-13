<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKw;

/**
 * Class LocaleArKw
 * @psalm-immutable
 */
class LocaleArKw extends LocaleAr
{
    public function territory(): TerritoryKw
    {
        return new TerritoryKw();
    }
}
