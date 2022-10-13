<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMu;

/**
 * Class LocaleEnMu
 * @psalm-immutable
 */
class LocaleEnMu extends LocaleEn
{
    public function territory(): TerritoryMu
    {
        return new TerritoryMu();
    }
}
