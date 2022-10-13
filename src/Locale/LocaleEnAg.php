<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAg;

/**
 * Class LocaleEnAg
 * @psalm-immutable
 */
class LocaleEnAg extends LocaleEn
{
    public function territory(): TerritoryAg
    {
        return new TerritoryAg();
    }
}
