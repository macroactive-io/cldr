<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPr;

/**
 * Class LocaleEnPr
 * @psalm-immutable
 */
class LocaleEnPr extends LocaleEn
{
    public function territory(): TerritoryPr
    {
        return new TerritoryPr();
    }
}
