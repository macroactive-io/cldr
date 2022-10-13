<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryJm;

/**
 * Class LocaleEnJm
 * @psalm-immutable
 */
class LocaleEnJm extends LocaleEn
{
    public function territory(): TerritoryJm
    {
        return new TerritoryJm();
    }
}
