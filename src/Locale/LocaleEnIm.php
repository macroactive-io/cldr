<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIm;

/**
 * Class LocaleEnIm
 * @psalm-immutable
 */
class LocaleEnIm extends LocaleEn
{
    public function territory(): TerritoryIm
    {
        return new TerritoryIm();
    }
}
