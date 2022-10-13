<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBe;

/**
 * Class LocaleFrBe
 * @psalm-immutable
 */
class LocaleFrBe extends LocaleFr
{
    public function territory(): TerritoryBe
    {
        return new TerritoryBe();
    }
}
