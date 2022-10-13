<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryWf;

/**
 * Class LocaleFrWf
 */
class LocaleFrWf extends LocaleFr
{
    public function territory()
    {
        return new TerritoryWf();
    }
}
