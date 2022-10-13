<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBa;

/**
 * Class LocaleSrLatnBa
 * @psalm-immutable
 */
class LocaleSrLatnBa extends LocaleSrLatn
{
    public function territory(): TerritoryBa
    {
        return new TerritoryBa();
    }
}
