<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryJo;

/**
 * Class LocaleArJo
 * @psalm-immutable
 */
class LocaleArJo extends LocaleAr
{
    public function territory(): TerritoryJo
    {
        return new TerritoryJo();
    }
}
