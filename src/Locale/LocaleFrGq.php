<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGq;

/**
 * Class LocaleFrGq
 * @psalm-immutable
 */
class LocaleFrGq extends LocaleFr
{
    public function territory(): TerritoryGq
    {
        return new TerritoryGq();
    }
}
