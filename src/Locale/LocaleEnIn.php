<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LocaleEnIn
 */
class LocaleEnIn extends LocaleEn
{
    public function territory()
    {
        return new TerritoryIn();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
