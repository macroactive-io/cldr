<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKz;

/**
 * Class LocaleRuKz
 * @psalm-immutable
 */
class LocaleRuKz extends LocaleRu
{
    public function territory(): TerritoryKz
    {
        return new TerritoryKz();
    }
}
