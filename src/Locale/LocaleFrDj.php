<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDj;

/**
 * Class LocaleFrDj
 * @psalm-immutable
 */
class LocaleFrDj extends LocaleFr
{
    public function territory(): TerritoryDj
    {
        return new TerritoryDj();
    }
}
