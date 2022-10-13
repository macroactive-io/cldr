<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBj;

/**
 * Class LocaleFrBj
 * @psalm-immutable
 */
class LocaleFrBj extends LocaleFr
{
    public function territory(): TerritoryBj
    {
        return new TerritoryBj();
    }
}
