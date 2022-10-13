<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAx;

/**
 * Class LocaleSvAx
 * @psalm-immutable
 */
class LocaleSvAx extends LocaleSv
{
    public function territory(): TerritoryAx
    {
        return new TerritoryAx();
    }
}
