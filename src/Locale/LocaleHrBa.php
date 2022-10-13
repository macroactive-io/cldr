<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBa;

/**
 * Class LocaleHrBa
 * @psalm-immutable
 */
class LocaleHrBa extends LocaleHr
{
    public function territory(): TerritoryBa
    {
        return new TerritoryBa();
    }
}
