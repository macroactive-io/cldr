<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryRw;

/**
 * Class LocaleEnRw
 * @psalm-immutable
 */
class LocaleEnRw extends LocaleEn
{
    public function territory(): TerritoryRw
    {
        return new TerritoryRw();
    }
}
