<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LocaleHaNe
 * @psalm-immutable
 */
class LocaleHaNe extends LocaleHa
{
    public function territory(): TerritoryNe
    {
        return new TerritoryNe();
    }
}
