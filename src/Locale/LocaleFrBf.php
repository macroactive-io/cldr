<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBf;

/**
 * Class LocaleFrBf
 * @psalm-immutable
 */
class LocaleFrBf extends LocaleFr
{
    public function territory(): TerritoryBf
    {
        return new TerritoryBf();
    }
}
