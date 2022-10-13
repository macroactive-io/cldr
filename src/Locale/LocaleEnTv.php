<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTv;

/**
 * Class LocaleEnTv
 * @psalm-immutable
 */
class LocaleEnTv extends LocaleEn
{
    public function territory(): TerritoryTv
    {
        return new TerritoryTv();
    }
}
