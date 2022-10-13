<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPw;

/**
 * Class LocaleEnPw
 * @psalm-immutable
 */
class LocaleEnPw extends LocaleEn
{
    public function territory(): TerritoryPw
    {
        return new TerritoryPw();
    }
}
