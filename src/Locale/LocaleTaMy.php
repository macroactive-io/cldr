<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMy;

/**
 * Class LocaleTaMy
 */
class LocaleTaMy extends LocaleTa
{
    public function territory()
    {
        return new TerritoryMy();
    }

    protected function digitsGroup()
    {
        return 3;
    }
}
