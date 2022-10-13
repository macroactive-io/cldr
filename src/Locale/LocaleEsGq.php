<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGq;

/**
 * Class LocaleEsGq
 */
class LocaleEsGq extends LocaleEs
{
    public function territory()
    {
        return new TerritoryGq();
    }
}
