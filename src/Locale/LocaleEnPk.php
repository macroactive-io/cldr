<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPk;

/**
 * Class LocaleEnPk
 */
class LocaleEnPk extends LocaleEn
{
    public function territory()
    {
        return new TerritoryPk();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
