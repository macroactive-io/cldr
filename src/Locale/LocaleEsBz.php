<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBz;

/**
 * Class LocaleEsBz
 * @psalm-immutable
 */
class LocaleEsBz extends LocaleEs
{
    public function territory(): TerritoryBz
    {
        return new TerritoryBz();
    }
}
