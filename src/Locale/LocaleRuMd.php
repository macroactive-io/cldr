<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMd;

/**
 * Class LocaleRuMd
 * @psalm-immutable
 */
class LocaleRuMd extends LocaleRu
{
    public function territory(): TerritoryMd
    {
        return new TerritoryMd();
    }
}
