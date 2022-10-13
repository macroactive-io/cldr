<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVu;

/**
 * Class LocaleFrVu
 */
class LocaleFrVu extends LocaleFr
{
    public function territory()
    {
        return new TerritoryVu();
    }
}
