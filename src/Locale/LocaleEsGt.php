<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGt;

/**
 * Class LocaleEsGt
 * @psalm-immutable
 */
class LocaleEsGt extends LocaleEs
{
    public function territory(): TerritoryGt
    {
        return new TerritoryGt();
    }
}
