<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZw;

/**
 * Class LocaleStZw
 * @psalm-immutable
 */
class LocaleStZw extends LocaleSt
{
    public function territory(): TerritoryZw
    {
        return new TerritoryZw();
    }
}
