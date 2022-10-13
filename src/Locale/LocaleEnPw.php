<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPw;

/**
 * Class LocaleEnPw
 */
class LocaleEnPw extends LocaleEn
{
    public function territory()
    {
        return new TerritoryPw();
    }
}
