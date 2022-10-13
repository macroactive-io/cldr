<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMo;

/**
 * Class LocaleZhHansMo
 */
class LocaleZhHansMo extends LocaleZh
{
    public function territory()
    {
        return new TerritoryMo();
    }
}
