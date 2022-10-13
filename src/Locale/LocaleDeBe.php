<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBe;

/**
 * Class LocaleDeBe
 * @psalm-immutable
 */
class LocaleDeBe extends LocaleDe
{
    public function territory(): TerritoryBe
    {
        return new TerritoryBe();
    }
}
