<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGh;

/**
 * Class LocaleEnGh
 */
class LocaleEnGh extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGh();
    }
}
