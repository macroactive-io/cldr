<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNc;

/**
 * Class LocaleFrNc
 */
class LocaleFrNc extends LocaleFr
{
    public function territory()
    {
        return new TerritoryNc();
    }
}
