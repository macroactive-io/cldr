<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAf;

/**
 * Class LocalePsAf
 */
class LocalePsAf extends LocalePs
{
    public function territory()
    {
        return new TerritoryAf();
    }
}
