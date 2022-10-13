<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLu;

/**
 * Class LocaleDeLu
 * @psalm-immutable
 */
class LocaleDeLu extends LocaleDe
{
    public function territory(): TerritoryLu
    {
        return new TerritoryLu();
    }
}
