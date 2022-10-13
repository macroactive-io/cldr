<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDm;

/**
 * Class LocaleEnDm
 * @psalm-immutable
 */
class LocaleEnDm extends LocaleEn
{
    public function territory(): TerritoryDm
    {
        return new TerritoryDm();
    }
}
