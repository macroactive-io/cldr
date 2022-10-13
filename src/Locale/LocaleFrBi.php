<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBi;

/**
 * Class LocaleFrBi
 * @psalm-immutable
 */
class LocaleFrBi extends LocaleFr
{
    public function territory(): TerritoryBi
    {
        return new TerritoryBi();
    }
}
