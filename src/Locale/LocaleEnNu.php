<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNu;

/**
 * Class LocaleEnNu
 * @psalm-immutable
 */
class LocaleEnNu extends LocaleEn
{
    public function territory(): TerritoryNu
    {
        return new TerritoryNu();
    }
}
