<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEc;

/**
 * Class LocaleEsEc
 * @psalm-immutable
 */
class LocaleEsEc extends LocaleEs
{
    public function territory(): TerritoryEc
    {
        return new TerritoryEc();
    }
}
