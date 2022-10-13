<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHk;

/**
 * Class LocaleZhHantHk
 */
class LocaleZhHantHk extends LocaleZhHant
{
    public function territory()
    {
        return new TerritoryHk();
    }
}
