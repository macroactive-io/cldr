<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDj;

/**
 * Class LocaleArDj
 * @psalm-immutable
 */
class LocaleArDj extends LocaleAr
{
    public function territory(): TerritoryDj
    {
        return new TerritoryDj();
    }
}
