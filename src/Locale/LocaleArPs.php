<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPs;

/**
 * Class LocaleArPs
 * @psalm-immutable
 */
class LocaleArPs extends LocaleAr
{
    public function territory(): TerritoryPs
    {
        return new TerritoryPs();
    }
}
