<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGa;

/**
 * Class LocaleFrGa
 */
class LocaleFrGa extends LocaleFr
{
    public function territory()
    {
        return new TerritoryGa();
    }
}
