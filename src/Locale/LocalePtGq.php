<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGq;

/**
 * Class LocalePtGq
 * @psalm-immutable
 */
class LocalePtGq extends LocalePt
{
    public function territory(): TerritoryGq
    {
        return new TerritoryGq();
    }
}
