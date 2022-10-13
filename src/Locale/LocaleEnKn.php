<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKn;

/**
 * Class LocaleEnKn
 * @psalm-immutable
 */
class LocaleEnKn extends LocaleEn
{
    public function territory(): TerritoryKn
    {
        return new TerritoryKn();
    }
}
