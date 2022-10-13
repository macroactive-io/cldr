<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMu;

/**
 * Class LocaleFrMu
 */
class LocaleFrMu extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMu();
    }
}
