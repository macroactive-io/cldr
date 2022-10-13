<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBi;

/**
 * Class LocaleFrBi
 */
class LocaleFrBi extends LocaleFr
{
    public function territory()
    {
        return new TerritoryBi();
    }
}
