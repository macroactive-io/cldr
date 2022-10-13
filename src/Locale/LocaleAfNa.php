<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNa;

/**
 * Class LocaleAfNa
 * @psalm-immutable
 */
class LocaleAfNa extends LocaleAf
{
    public function territory(): TerritoryNa
    {
        return new TerritoryNa();
    }
}
