<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMw;

/**
 * Class LocaleNyMw
 */
class LocaleNyMw extends LocaleNy
{
    public function territory()
    {
        return new TerritoryMw();
    }
}
