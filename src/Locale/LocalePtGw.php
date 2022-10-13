<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGw;

/**
 * Class LocalePtGw
 * @psalm-immutable
 */
class LocalePtGw extends LocalePt
{
    public function territory(): TerritoryGw
    {
        return new TerritoryGw();
    }
}
