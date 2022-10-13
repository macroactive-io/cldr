<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LocaleStZa
 * @psalm-immutable
 */
class LocaleStZa extends LocaleSt
{
    public function territory(): TerritoryZa
    {
        return new TerritoryZa();
    }
}
