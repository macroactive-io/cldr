<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryWs;

/**
 * Class LocaleEnWs
 * @psalm-immutable
 */
class LocaleEnWs extends LocaleEn
{
    public function territory(): TerritoryWs
    {
        return new TerritoryWs();
    }
}
