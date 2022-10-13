<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPn;

/**
 * Class LocaleEnPn
 * @psalm-immutable
 */
class LocaleEnPn extends LocaleEn
{
    public function territory(): TerritoryPn
    {
        return new TerritoryPn();
    }
}
