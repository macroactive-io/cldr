<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAi;

/**
 * Class LocaleEnAi
 * @psalm-immutable
 */
class LocaleEnAi extends LocaleEn
{
    public function territory(): TerritoryAi
    {
        return new TerritoryAi();
    }
}
