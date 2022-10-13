<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPe;

/**
 * Class LocaleEsPe
 */
class LocaleEsPe extends LocaleEs
{
    public function territory()
    {
        return new TerritoryPe();
    }
}
