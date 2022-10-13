<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LocaleTeoKe
 */
class LocaleTeoKe extends LocaleTeo
{
    public function territory()
    {
        return new TerritoryKe();
    }
}
