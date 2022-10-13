<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVu;

/**
 * Class LocaleFrVu
 * @psalm-immutable
 */
class LocaleFrVu extends LocaleFr
{
    public function territory(): TerritoryVu
    {
        return new TerritoryVu();
    }
}
