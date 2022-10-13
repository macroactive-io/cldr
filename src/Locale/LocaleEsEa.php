<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEa;

/**
 * Class LocaleEsEa
 * @psalm-immutable
 */
class LocaleEsEa extends LocaleEs
{
    public function territory(): TerritoryEa
    {
        return new TerritoryEa();
    }
}
