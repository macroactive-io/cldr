<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKy;

/**
 * Class LocaleEnKy
 * @psalm-immutable
 */
class LocaleEnKy extends LocaleEn
{
    public function territory(): TerritoryKy
    {
        return new TerritoryKy();
    }
}
