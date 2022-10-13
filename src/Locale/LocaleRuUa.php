<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUa;

/**
 * Class LocaleRuUa
 * @psalm-immutable
 */
class LocaleRuUa extends LocaleRu
{
    public function territory(): TerritoryUa
    {
        return new TerritoryUa();
    }
}
