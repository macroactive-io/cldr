<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPk;

/**
 * Class LocaleEnPk
 * @psalm-immutable
 */
class LocaleEnPk extends LocaleEn
{
    public function territory(): TerritoryPk
    {
        return new TerritoryPk();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
