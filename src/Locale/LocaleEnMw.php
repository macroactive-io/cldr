<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMw;

/**
 * Class LocaleEnMw
 * @psalm-immutable
 */
class LocaleEnMw extends LocaleEn
{
    public function territory(): TerritoryMw
    {
        return new TerritoryMw();
    }
}
