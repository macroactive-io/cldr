<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFm;

/**
 * Class LocaleEnFm
 * @psalm-immutable
 */
class LocaleEnFm extends LocaleEn
{
    public function territory(): TerritoryFm
    {
        return new TerritoryFm();
    }
}
