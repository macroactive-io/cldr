<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGp;

/**
 * Class LocaleFrGp
 * @psalm-immutable
 */
class LocaleFrGp extends LocaleFr
{
    public function territory(): TerritoryGp
    {
        return new TerritoryGp();
    }
}
