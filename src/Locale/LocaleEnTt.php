<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTt;

/**
 * Class LocaleEnTt
 * @psalm-immutable
 */
class LocaleEnTt extends LocaleEn
{
    public function territory(): TerritoryTt
    {
        return new TerritoryTt();
    }
}
