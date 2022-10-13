<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUg;

/**
 * Class LocaleSwUg
 */
class LocaleSwUg extends LocaleSw
{
    public function territory()
    {
        return new TerritoryUg();
    }
}
