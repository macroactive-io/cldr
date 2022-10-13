<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBf;

/**
 * Class LocaleFrBf
 */
class LocaleFrBf extends LocaleFr
{
    public function territory()
    {
        return new TerritoryBf();
    }
}
