<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMe;

/**
 * Class LocaleSrLatnMe
 */
class LocaleSrLatnMe extends LocaleSrLatn
{
    public function territory()
    {
        return new TerritoryMe();
    }
}
