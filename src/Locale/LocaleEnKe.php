<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LocaleEnKe
 * @psalm-immutable
 */
class LocaleEnKe extends LocaleEn
{
    public function territory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
