<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLi;

/**
 * Class LocaleGswLi
 */
class LocaleGswLi extends LocaleGsw
{
    public function territory()
    {
        return new TerritoryLi();
    }
}
