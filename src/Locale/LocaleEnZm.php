<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZm;

/**
 * Class LocaleEnZm
 * @psalm-immutable
 */
class LocaleEnZm extends LocaleEn
{
    public function territory(): TerritoryZm
    {
        return new TerritoryZm();
    }
}
