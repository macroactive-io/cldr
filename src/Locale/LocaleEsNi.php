<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNi;

/**
 * Class LocaleEsNi
 * @psalm-immutable
 */
class LocaleEsNi extends LocaleEs
{
    public function territory(): TerritoryNi
    {
        return new TerritoryNi();
    }
}
