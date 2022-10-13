<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDz;

/**
 * Class LocaleFrDz
 * @psalm-immutable
 */
class LocaleFrDz extends LocaleFr
{
    public function territory(): TerritoryDz
    {
        return new TerritoryDz();
    }
}
