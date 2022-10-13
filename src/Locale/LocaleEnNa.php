<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNa;

/**
 * Class LocaleEnNa
 * @psalm-immutable
 */
class LocaleEnNa extends LocaleEn
{
    public function territory(): TerritoryNa
    {
        return new TerritoryNa();
    }
}
