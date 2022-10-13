<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGg;

/**
 * Class LocaleEnGg
 * @psalm-immutable
 */
class LocaleEnGg extends LocaleEn
{
    public function territory(): TerritoryGg
    {
        return new TerritoryGg();
    }
}
