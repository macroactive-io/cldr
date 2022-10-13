<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNl;

/**
 * Class LocaleEnNl - English
 * @psalm-immutable
 */
class LocaleEnNl extends LocaleEn
{
    public function territory(): TerritoryNl
    {
        return new TerritoryNl();
    }
}
