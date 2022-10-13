<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVe;

/**
 * Class LocaleEsVe
 * @psalm-immutable
 */
class LocaleEsVe extends LocaleEs
{
    public function territory(): TerritoryVe
    {
        return new TerritoryVe();
    }
}
