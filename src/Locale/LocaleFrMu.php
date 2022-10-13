<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMu;

/**
 * Class LocaleFrMu
 * @psalm-immutable
 */
class LocaleFrMu extends LocaleFr
{
    public function territory(): TerritoryMu
    {
        return new TerritoryMu();
    }
}
