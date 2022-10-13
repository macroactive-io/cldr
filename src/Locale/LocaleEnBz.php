<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBz;

/**
 * Class LocaleEnBz
 * @psalm-immutable
 */
class LocaleEnBz extends LocaleEn
{
    public function territory(): TerritoryBz
    {
        return new TerritoryBz();
    }
}
