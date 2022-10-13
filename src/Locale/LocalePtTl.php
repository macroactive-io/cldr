<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTl;

/**
 * Class LocalePtTl
 * @psalm-immutable
 */
class LocalePtTl extends LocalePt
{
    public function territory(): TerritoryTl
    {
        return new TerritoryTl();
    }
}
