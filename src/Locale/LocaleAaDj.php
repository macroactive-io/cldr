<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDj;

/**
 * Class LocaleAaDj
 */
class LocaleAaDj extends LocaleAa
{
    public function territory()
    {
        return new TerritoryDj();
    }
}
