<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKp;

/**
 * Class LocaleKoKp
 * @psalm-immutable
 */
class LocaleKoKp extends LocaleKo
{
    public function territory(): TerritoryKp
    {
        return new TerritoryKp();
    }
}
