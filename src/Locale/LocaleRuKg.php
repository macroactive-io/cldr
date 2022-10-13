<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKg;

/**
 * Class LocaleRuKg
 * @psalm-immutable
 */
class LocaleRuKg extends LocaleRu
{
    public function territory(): TerritoryKg
    {
        return new TerritoryKg();
    }
}
