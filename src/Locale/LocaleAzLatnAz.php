<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAz;

/**
 * Class LocaleAzLatnAz
 */
class LocaleAzLatnAz extends LocaleAzLatn
{
    public function territory()
    {
        return new TerritoryAz();
    }
}
