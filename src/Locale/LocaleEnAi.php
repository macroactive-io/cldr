<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAi;

/**
 * Class LocaleEnAi
 */
class LocaleEnAi extends LocaleEn
{
    public function territory()
    {
        return new TerritoryAi();
    }
}
