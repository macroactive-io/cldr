<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBa;

/**
 * Class LocaleSrLatnBa
 */
class LocaleSrLatnBa extends LocaleSrLatn
{
    public function territory()
    {
        return new TerritoryBa();
    }
}
