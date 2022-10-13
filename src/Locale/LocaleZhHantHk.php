<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHk;

/**
 * Class LocaleZhHantHk
 * @psalm-immutable
 */
class LocaleZhHantHk extends LocaleZhHant
{
    public function territory(): TerritoryHk
    {
        return new TerritoryHk();
    }
}
