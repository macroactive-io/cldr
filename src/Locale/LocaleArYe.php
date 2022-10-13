<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryYe;

/**
 * Class LocaleArYe
 * @psalm-immutable
 */
class LocaleArYe extends LocaleAr
{
    public function territory(): TerritoryYe
    {
        return new TerritoryYe();
    }
}
