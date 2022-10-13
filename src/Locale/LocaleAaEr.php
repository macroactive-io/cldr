<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LocaleAaEr
 * @psalm-immutable
 */
class LocaleAaEr extends LocaleAa
{
    public function territory(): TerritoryEr
    {
        return new TerritoryEr();
    }
}
