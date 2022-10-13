<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPh;

/**
 * Class LocaleEnPh
 */
class LocaleEnPh extends LocaleEn
{
    public function territory()
    {
        return new TerritoryPh();
    }
}
