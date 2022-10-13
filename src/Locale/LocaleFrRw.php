<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryRw;

/**
 * Class LocaleFrRw
 */
class LocaleFrRw extends LocaleFr
{
    public function territory()
    {
        return new TerritoryRw();
    }
}
