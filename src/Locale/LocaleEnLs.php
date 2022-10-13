<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLs;

/**
 * Class LocaleEnLs
 * @psalm-immutable
 */
class LocaleEnLs extends LocaleEn
{
    public function territory(): TerritoryLs
    {
        return new TerritoryLs();
    }
}
