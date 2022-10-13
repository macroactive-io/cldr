<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGf;

/**
 * Class LocaleFrGf
 */
class LocaleFrGf extends LocaleFr
{
    public function territory()
    {
        return new TerritoryGf();
    }
}
