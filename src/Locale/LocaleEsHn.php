<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHn;

/**
 * Class LocaleEsHn
 * @psalm-immutable
 */
class LocaleEsHn extends LocaleEs
{
    public function territory(): TerritoryHn
    {
        return new TerritoryHn();
    }
}
