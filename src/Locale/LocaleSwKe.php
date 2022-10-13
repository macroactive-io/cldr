<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LocaleSwKe
 */
class LocaleSwKe extends LocaleSw
{
    public function territory()
    {
        return new TerritoryKe();
    }
}
