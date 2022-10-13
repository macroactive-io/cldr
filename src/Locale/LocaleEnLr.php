<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLr;

/**
 * Class LocaleEnLr
 * @psalm-immutable
 */
class LocaleEnLr extends LocaleEn
{
    public function territory(): TerritoryLr
    {
        return new TerritoryLr();
    }
}
