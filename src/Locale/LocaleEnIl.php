<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIl;

/**
 * Class LocaleEnIl
 * @psalm-immutable
 */
class LocaleEnIl extends LocaleEn
{
    public function territory(): TerritoryIl
    {
        return new TerritoryIl();
    }
}
