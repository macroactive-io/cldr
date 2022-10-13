<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBa;

/**
 * Class LocaleSrCyrlBa
 * @psalm-immutable
 */
class LocaleSrCyrlBa extends LocaleSrCyrl
{
    public function territory(): TerritoryBa
    {
        return new TerritoryBa();
    }
}
