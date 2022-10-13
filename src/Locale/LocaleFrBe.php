<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBe;

/**
 * Class LocaleFrBe
 */
class LocaleFrBe extends LocaleFr
{
    public function territory()
    {
        return new TerritoryBe();
    }
}
