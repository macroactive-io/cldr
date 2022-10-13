<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTg;

/**
 * Class LocaleFrTg
 * @psalm-immutable
 */
class LocaleFrTg extends LocaleFr
{
    public function territory(): TerritoryTg
    {
        return new TerritoryTg();
    }
}
