<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTg;

/**
 * Class LocaleFrTg
 */
class LocaleFrTg extends LocaleFr
{
    public function territory()
    {
        return new TerritoryTg();
    }
}
