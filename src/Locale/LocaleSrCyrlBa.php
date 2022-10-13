<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBa;

/**
 * Class LocaleSrCyrlBa
 */
class LocaleSrCyrlBa extends LocaleSrCyrl
{
    public function territory()
    {
        return new TerritoryBa();
    }
}
