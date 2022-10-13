<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTv;

/**
 * Class LocaleEnTv
 */
class LocaleEnTv extends LocaleEn
{
    public function territory()
    {
        return new TerritoryTv();
    }
}
