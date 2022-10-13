<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBm;

/**
 * Class LocaleEnBm
 * @psalm-immutable
 */
class LocaleEnBm extends LocaleEn
{
    public function territory(): TerritoryBm
    {
        return new TerritoryBm();
    }
}
