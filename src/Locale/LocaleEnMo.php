<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMo;

/**
 * Class LocaleEnMo
 */
class LocaleEnMo extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMo();
    }
}
