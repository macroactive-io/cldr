<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMc;

/**
 * Class LocaleFrMc
 * @psalm-immutable
 */
class LocaleFrMc extends LocaleFr
{
    public function territory(): TerritoryMc
    {
        return new TerritoryMc();
    }
}
