<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIt;

/**
 * Class LocaleDeCh - Swiss High German
 */
class LocaleDeIt extends LocaleDe
{
    public function territory()
    {
        return new TerritoryIt();
    }
}
