<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMl;

/**
 * Class LocaleFrMl
 * @psalm-immutable
 */
class LocaleFrMl extends LocaleFr
{
    public function territory(): TerritoryMl
    {
        return new TerritoryMl();
    }
}
