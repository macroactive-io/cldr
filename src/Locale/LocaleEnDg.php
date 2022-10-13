<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDg;

/**
 * Class LocaleEnDg
 * @psalm-immutable
 */
class LocaleEnDg extends LocaleEn
{
    public function territory(): TerritoryDg
    {
        return new TerritoryDg();
    }
}
