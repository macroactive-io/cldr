<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTw;

/**
 * Class LocaleZhHantTw
 */
class LocaleZhHantTw extends LocaleZhHant
{
    public function territory()
    {
        return new TerritoryTw();
    }
}
