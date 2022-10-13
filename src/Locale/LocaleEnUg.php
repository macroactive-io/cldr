<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUg;

/**
 * Class LocaleEnUg
 * @psalm-immutable
 */
class LocaleEnUg extends LocaleEn
{
    public function territory(): TerritoryUg
    {
        return new TerritoryUg();
    }
}
