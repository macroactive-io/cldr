<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMf;

/**
 * Class LocaleFrMf
 */
class LocaleFrMf extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMf();
    }
}
