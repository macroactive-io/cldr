<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVu;

/**
 * Class LocaleEnVu
 * @psalm-immutable
 */
class LocaleEnVu extends LocaleEn
{
    public function territory(): TerritoryVu
    {
        return new TerritoryVu();
    }
}
