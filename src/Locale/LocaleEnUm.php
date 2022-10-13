<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUm;

/**
 * Class LocaleEnUm
 */
class LocaleEnUm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryUm();
    }
}
