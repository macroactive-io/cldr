<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGf;

/**
 * Class LocaleFrGf
 * @psalm-immutable
 */
class LocaleFrGf extends LocaleFr
{
    public function territory(): TerritoryGf
    {
        return new TerritoryGf();
    }
}
