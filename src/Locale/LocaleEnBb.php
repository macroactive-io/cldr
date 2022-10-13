<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBb;

/**
 * Class LocaleEnBb
 * @psalm-immutable
 */
class LocaleEnBb extends LocaleEn
{
    public function territory(): TerritoryBb
    {
        return new TerritoryBb();
    }
}
