<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIc;

/**
 * Class LocaleEsIc
 * @psalm-immutable
 */
class LocaleEsIc extends LocaleEs
{
    public function territory(): TerritoryIc
    {
        return new TerritoryIc();
    }
}
