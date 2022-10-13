<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPr;

/**
 * Class LocaleEsPr
 * @psalm-immutable
 */
class LocaleEsPr extends LocaleEs
{
    public function territory(): TerritoryPr
    {
        return new TerritoryPr();
    }
}
