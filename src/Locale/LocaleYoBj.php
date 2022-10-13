<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBj;

/**
 * Class LocaleYoBj
 * @psalm-immutable
 */
class LocaleYoBj extends LocaleYo
{
    public function territory(): TerritoryBj
    {
        return new TerritoryBj();
    }
}
