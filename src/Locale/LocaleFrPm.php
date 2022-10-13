<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPm;

/**
 * Class LocaleFrPm
 * @psalm-immutable
 */
class LocaleFrPm extends LocaleFr
{
    public function territory(): TerritoryPm
    {
        return new TerritoryPm();
    }
}
