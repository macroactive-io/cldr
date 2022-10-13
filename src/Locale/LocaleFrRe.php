<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryRe;

/**
 * Class LocaleFrRe
 */
class LocaleFrRe extends LocaleFr
{
    public function territory()
    {
        return new TerritoryRe();
    }
}
