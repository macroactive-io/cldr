<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBw;

/**
 * Class LocaleEnBw
 * @psalm-immutable
 */
class LocaleEnBw extends LocaleEn
{
    public function territory(): TerritoryBw
    {
        return new TerritoryBw();
    }
}
