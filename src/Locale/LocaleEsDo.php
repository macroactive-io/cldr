<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDo;

/**
 * Class LocaleEsDo
 */
class LocaleEsDo extends LocaleEs
{
    public function territory()
    {
        return new TerritoryDo();
    }
}
