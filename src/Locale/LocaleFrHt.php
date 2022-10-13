<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHt;

/**
 * Class LocaleFrHt
 * @psalm-immutable
 */
class LocaleFrHt extends LocaleFr
{
    public function territory(): TerritoryHt
    {
        return new TerritoryHt();
    }
}
