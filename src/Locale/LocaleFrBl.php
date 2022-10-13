<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBl;

/**
 * Class LocaleFrBl
 * @psalm-immutable
 */
class LocaleFrBl extends LocaleFr
{
    public function territory(): TerritoryBl
    {
        return new TerritoryBl();
    }
}
