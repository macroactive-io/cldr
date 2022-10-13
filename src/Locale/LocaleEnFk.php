<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFk;

/**
 * Class LocaleEnFk
 * @psalm-immutable
 */
class LocaleEnFk extends LocaleEn
{
    public function territory(): TerritoryFk
    {
        return new TerritoryFk();
    }
}
