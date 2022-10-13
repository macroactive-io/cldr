<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LocaleTeoKe
 * @psalm-immutable
 */
class LocaleTeoKe extends LocaleTeo
{
    public function territory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
