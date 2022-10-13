<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBi;

/**
 * Class LocaleEnBi
 * @psalm-immutable
 */
class LocaleEnBi extends LocaleEn
{
    public function territory(): TerritoryBi
    {
        return new TerritoryBi();
    }
}
