<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTd;

/**
 * Class LocaleFrTd
 * @psalm-immutable
 */
class LocaleFrTd extends LocaleFr
{
    public function territory(): TerritoryTd
    {
        return new TerritoryTd();
    }
}
