<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHk;

/**
 * Class LocaleZhHansHk
 */
class LocaleZhHansHk extends LocaleZh
{
    public function territory()
    {
        return new TerritoryHk();
    }
}
