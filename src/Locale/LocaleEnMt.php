<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMt;

/**
 * Class LocaleEnMt
 * @psalm-immutable
 */
class LocaleEnMt extends LocaleEn
{
    public function territory(): TerritoryMt
    {
        return new TerritoryMt();
    }
}
