<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGu;

/**
 * Class LocaleEnGu
 * @psalm-immutable
 */
class LocaleEnGu extends LocaleEn
{
    public function territory(): TerritoryGu
    {
        return new TerritoryGu();
    }
}
