<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKi;

/**
 * Class LocaleEnKi
 * @psalm-immutable
 */
class LocaleEnKi extends LocaleEn
{
    public function territory(): TerritoryKi
    {
        return new TerritoryKi();
    }
}
