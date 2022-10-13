<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMh;

/**
 * Class LocaleEnMh
 */
class LocaleEnMh extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMh();
    }
}
