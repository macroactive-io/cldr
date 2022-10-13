<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKp;

/**
 * Class LocaleKoKp
 */
class LocaleKoKp extends LocaleKo
{
    public function territory()
    {
        return new TerritoryKp();
    }
}
