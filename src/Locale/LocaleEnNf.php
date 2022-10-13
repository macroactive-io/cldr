<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNf;

/**
 * Class LocaleEnNf
 * @psalm-immutable
 */
class LocaleEnNf extends LocaleEn
{
    public function territory(): TerritoryNf
    {
        return new TerritoryNf();
    }
}
