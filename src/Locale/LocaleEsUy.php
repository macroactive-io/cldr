<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUy;

/**
 * Class LocaleEsUy
 * @psalm-immutable
 */
class LocaleEsUy extends LocaleEs
{
    public function territory(): TerritoryUy
    {
        return new TerritoryUy();
    }
}
