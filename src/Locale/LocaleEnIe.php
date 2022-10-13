<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIe;

/**
 * Class LocaleEnIe
 * @psalm-immutable
 */
class LocaleEnIe extends LocaleEn
{
    public function territory(): TerritoryIe
    {
        return new TerritoryIe();
    }
}
