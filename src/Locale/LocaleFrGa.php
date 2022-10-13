<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGa;

/**
 * Class LocaleFrGa
 * @psalm-immutable
 */
class LocaleFrGa extends LocaleFr
{
    public function territory(): TerritoryGa
    {
        return new TerritoryGa();
    }
}
