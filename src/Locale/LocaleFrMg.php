<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMg;

/**
 * Class LocaleFrMg
 * @psalm-immutable
 */
class LocaleFrMg extends LocaleFr
{
    public function territory(): TerritoryMg
    {
        return new TerritoryMg();
    }
}
