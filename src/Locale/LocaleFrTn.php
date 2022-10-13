<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTn;

/**
 * Class LocaleFrTn
 */
class LocaleFrTn extends LocaleFr
{
    public function territory()
    {
        return new TerritoryTn();
    }
}
