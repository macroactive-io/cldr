<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBh;

/**
 * Class LocaleArBh
 */
class LocaleArBh extends LocaleAr
{
    public function territory()
    {
        return new TerritoryBh();
    }
}
