<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryJo;

/**
 * Class LocaleArJo
 */
class LocaleArJo extends LocaleAr
{
    public function territory()
    {
        return new TerritoryJo();
    }
}
