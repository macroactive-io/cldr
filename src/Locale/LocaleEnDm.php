<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDm;

/**
 * Class LocaleEnDm
 */
class LocaleEnDm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryDm();
    }
}
