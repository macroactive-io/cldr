<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBs;

/**
 * Class LocaleEnBs
 * @psalm-immutable
 */
class LocaleEnBs extends LocaleEn
{
    public function territory(): TerritoryBs
    {
        return new TerritoryBs();
    }
}
