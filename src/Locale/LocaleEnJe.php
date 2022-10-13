<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryJe;

/**
 * Class LocaleEnJe
 * @psalm-immutable
 */
class LocaleEnJe extends LocaleEn
{
    public function territory(): TerritoryJe
    {
        return new TerritoryJe();
    }
}
