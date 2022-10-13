<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGm;

/**
 * Class LocaleEnGm
 * @psalm-immutable
 */
class LocaleEnGm extends LocaleEn
{
    public function territory(): TerritoryGm
    {
        return new TerritoryGm();
    }
}
