<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLb;

/**
 * Class LocaleArLb
 * @psalm-immutable
 */
class LocaleArLb extends LocaleAr
{
    public function territory(): TerritoryLb
    {
        return new TerritoryLb();
    }
}
