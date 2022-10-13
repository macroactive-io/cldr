<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LocaleSoKe
 */
class LocaleSoKe extends LocaleSo
{
    public function territory()
    {
        return new TerritoryKe();
    }
}
