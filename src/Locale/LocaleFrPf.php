<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPf;

/**
 * Class LocaleFrPf
 * @psalm-immutable
 */
class LocaleFrPf extends LocaleFr
{
    public function territory(): TerritoryPf
    {
        return new TerritoryPf();
    }
}
