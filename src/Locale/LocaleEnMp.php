<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMp;

/**
 * Class LocaleEnMp
 * @psalm-immutable
 */
class LocaleEnMp extends LocaleEn
{
    public function territory(): TerritoryMp
    {
        return new TerritoryMp();
    }
}
