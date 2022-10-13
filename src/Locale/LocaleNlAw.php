<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAw;

/**
 * Class LocaleNlAw
 * @psalm-immutable
 */
class LocaleNlAw extends LocaleNl
{
    public function territory(): TerritoryAw
    {
        return new TerritoryAw();
    }
}
