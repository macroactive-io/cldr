<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGq;

/**
 * Class LocaleEsGq
 * @psalm-immutable
 */
class LocaleEsGq extends LocaleEs
{
    public function territory(): TerritoryGq
    {
        return new TerritoryGq();
    }
}
