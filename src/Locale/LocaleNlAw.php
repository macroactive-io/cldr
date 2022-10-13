<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAw;

/**
 * Class LocaleNlAw
 */
class LocaleNlAw extends LocaleNl
{
    public function territory()
    {
        return new TerritoryAw();
    }
}
