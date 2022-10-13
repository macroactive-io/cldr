<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LocaleEnTz
 * @psalm-immutable
 */
class LocaleEnTz extends LocaleEn
{
    public function territory(): TerritoryTz
    {
        return new TerritoryTz();
    }
}
