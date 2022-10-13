<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNl;

/**
 * Class LocaleNdsNl - Low German
 * @psalm-immutable
 */
class LocaleNdsNl extends LocaleNds
{
    public function territory(): TerritoryNl
    {
        return new TerritoryNl();
    }
}
