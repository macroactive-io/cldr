<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBr;

/**
 * Class LocaleEsBr
 */
class LocaleEsBr extends LocaleEs
{
    public function territory()
    {
        return new TerritoryBr();
    }
}
