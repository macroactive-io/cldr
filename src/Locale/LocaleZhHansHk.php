<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHk;

/**
 * Class LocaleZhHansHk
 * @psalm-immutable
 */
class LocaleZhHansHk extends LocaleZh
{
    public function territory(): TerritoryHk
    {
        return new TerritoryHk();
    }
}
