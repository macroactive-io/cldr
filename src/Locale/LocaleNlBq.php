<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBq;

/**
 * Class LocaleNlBq
 */
class LocaleNlBq extends LocaleNl
{
    public function territory()
    {
        return new TerritoryBq();
    }
}
