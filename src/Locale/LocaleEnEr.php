<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LocaleEnEr
 * @psalm-immutable
 */
class LocaleEnEr extends LocaleEn
{
    public function territory(): TerritoryEr
    {
        return new TerritoryEr();
    }
}
