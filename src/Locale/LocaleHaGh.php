<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGh;

/**
 * Class LocaleHaGh
 */
class LocaleHaGh extends LocaleHa
{
    public function territory()
    {
        return new TerritoryGh();
    }
}
