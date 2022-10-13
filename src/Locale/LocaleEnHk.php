<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHk;

/**
 * Class LocaleEnHk
 * @psalm-immutable
 */
class LocaleEnHk extends LocaleEn
{
    public function territory(): TerritoryHk
    {
        return new TerritoryHk();
    }
}
