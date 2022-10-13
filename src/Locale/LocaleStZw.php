<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZw;

/**
 * Class LocaleStZw
 */
class LocaleStZw extends LocaleSt
{
    public function territory()
    {
        return new TerritoryZw();
    }
}
