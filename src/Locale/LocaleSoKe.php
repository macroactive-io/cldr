<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LocaleSoKe
 * @psalm-immutable
 */
class LocaleSoKe extends LocaleSo
{
    public function territory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
