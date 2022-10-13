<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTn;

/**
 * Class LocaleFrTn
 * @psalm-immutable
 */
class LocaleFrTn extends LocaleFr
{
    public function territory(): TerritoryTn
    {
        return new TerritoryTn();
    }
}
