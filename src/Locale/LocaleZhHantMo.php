<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMo;

/**
 * Class LocaleZhHantMo
 */
class LocaleZhHantMo extends LocaleZhHant
{
    public function territory()
    {
        return new TerritoryMo();
    }
}
