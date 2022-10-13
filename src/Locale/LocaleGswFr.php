<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LocaleGswFr
 */
class LocaleGswFr extends LocaleGsw
{
    public function territory()
    {
        return new TerritoryFr();
    }
}
