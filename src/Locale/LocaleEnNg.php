<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LocaleEnNg
 * @psalm-immutable
 */
class LocaleEnNg extends LocaleEn
{
    public function territory(): TerritoryNg
    {
        return new TerritoryNg();
    }
}
