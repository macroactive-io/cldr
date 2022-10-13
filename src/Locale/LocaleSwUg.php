<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUg;

/**
 * Class LocaleSwUg
 * @psalm-immutable
 */
class LocaleSwUg extends LocaleSw
{
    public function territory(): TerritoryUg
    {
        return new TerritoryUg();
    }
}
