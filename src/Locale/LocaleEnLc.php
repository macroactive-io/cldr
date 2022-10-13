<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLc;

/**
 * Class LocaleEnLc
 * @psalm-immutable
 */
class LocaleEnLc extends LocaleEn
{
    public function territory(): TerritoryLc
    {
        return new TerritoryLc();
    }
}
