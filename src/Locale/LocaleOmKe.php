<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LocaleOmKe
 */
class LocaleOmKe extends LocaleOm
{
    public function territory()
    {
        return new TerritoryKe();
    }
}
