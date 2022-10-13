<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMr;

/**
 * Class LocaleFrMr
 * @psalm-immutable
 */
class LocaleFrMr extends LocaleFr
{
    public function territory(): TerritoryMr
    {
        return new TerritoryMr();
    }
}
