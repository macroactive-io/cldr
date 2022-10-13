<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LocaleEnIn
 * @psalm-immutable
 */
class LocaleEnIn extends LocaleEn
{
    public function territory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
