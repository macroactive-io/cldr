<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVc;

/**
 * Class LocaleEnVc
 * @psalm-immutable
 */
class LocaleEnVc extends LocaleEn
{
    public function territory(): TerritoryVc
    {
        return new TerritoryVc();
    }
}
