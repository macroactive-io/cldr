<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryRw;

/**
 * Class LocaleFrRw
 * @psalm-immutable
 */
class LocaleFrRw extends LocaleFr
{
    public function territory(): TerritoryRw
    {
        return new TerritoryRw();
    }
}
