<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUm;

/**
 * Class LocaleEnUm
 * @psalm-immutable
 */
class LocaleEnUm extends LocaleEn
{
    public function territory(): TerritoryUm
    {
        return new TerritoryUm();
    }
}
