<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryRe;

/**
 * Class LocaleFrRe
 * @psalm-immutable
 */
class LocaleFrRe extends LocaleFr
{
    public function territory(): TerritoryRe
    {
        return new TerritoryRe();
    }
}
