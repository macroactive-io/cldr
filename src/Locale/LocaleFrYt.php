<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryYt;

/**
 * Class LocaleFrYt
 * @psalm-immutable
 */
class LocaleFrYt extends LocaleFr
{
    public function territory(): TerritoryYt
    {
        return new TerritoryYt();
    }
}
