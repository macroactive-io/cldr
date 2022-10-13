<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMw;

/**
 * Class LocaleNyMw
 * @psalm-immutable
 */
class LocaleNyMw extends LocaleNy
{
    public function territory(): TerritoryMw
    {
        return new TerritoryMw();
    }
}
