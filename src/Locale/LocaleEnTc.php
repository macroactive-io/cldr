<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTc;

/**
 * Class LocaleEnTc
 * @psalm-immutable
 */
class LocaleEnTc extends LocaleEn
{
    public function territory(): TerritoryTc
    {
        return new TerritoryTc();
    }
}
